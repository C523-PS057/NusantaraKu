<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class ChangePasswordController extends Controller
{
    public function edit(string $id)
    {
        $data = User::findOrFail($id);
        if (auth()->user()->id !== $data->id) {
            return abort(403, 'Anda Tidak Bisa Merubah Password User Lain');
        }
        return view('user.user-ubah', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validasi request
        $validatedData = $request->validate([
            'password' => 'required|string|min:8|confirmed',
            'oldPassword' => 'required|string',
        ]);

        // Periksa apakah password lama yang dimasukkan cocok dengan password di database
        if (!password_verify($validatedData['oldPassword'], $user->password)) {
            flash()->addError('Password Lama Salah');
            return back();
        }

        // Update password baru setelah memastikan validasi berhasil
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        flash('Berhasil Ubah Password');
        return back();
    }
}
