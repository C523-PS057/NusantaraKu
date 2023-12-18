<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class UserController extends Controller
{
    public function show($id)
    {
        $data = User::findOrFail($id);
        return view('user.user-profil', [
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.user-edit', [
            'data' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = [
            'name' => 'required',
            'tanggal_lahir' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:5000',
            'role' => 'nullable',
        ];
        $rules = $request->validate($validatedData);
        $user = User::findOrFail($id);
        if ($request->filled('role')) {
            $rules['role'] = $request->role;
        }
        if ($request->hasFile('gambar')) {
            if ($user->gambar !== null) {
                Storage::delete('/public/' . $user->gambar);
            }
            $image = $request->file('gambar');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $imageName);

            $fullFilePath = storage_path('app/' . $path);

            ImageOptimizer::optimize($fullFilePath);

            $newImageName = Str::replaceLast($image->getClientOriginalExtension(), 'webp', $imageName);
            $newFilePath = storage_path('app/public/images/' . $newImageName);

            $image = imagecreatefromstring(file_get_contents($fullFilePath));
            imagewebp($image, $newFilePath, 80);
            unlink($fullFilePath);
            $rules['gambar'] = 'images/' . $newImageName;
        }
        $user->update($rules);
        flash('Berhasil Memperbarui Data');
        return back();
    }
}
