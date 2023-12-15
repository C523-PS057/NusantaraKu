<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
                Storage::delete($user->gambar);
            }
            $rules['gambar'] = $request->file('gambar')->store('/public/images');
        }
        $user->update($rules);
        flash('Berhasil Memperbarui Data');
        return back();
    }
}
