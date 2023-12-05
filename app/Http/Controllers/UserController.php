<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = User::findOrFail($id);
        return view('user.user-profil', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.user-edit', [
            'data' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = [
            'name' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:5000'
        ];
        $rules = $request->validate($validatedData);
        $user = User::findOrFail($id);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
