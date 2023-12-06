<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->email)->first();
            dd($googleUser);

            if ($user) {
                Auth::login($user);
                flash('Selamat Datang ' . $user->name);
                return redirect()->to('/');
            } else {
                $newUser = User::create([
                    'email' => $googleUser->getEmail(),
                    'name' => $googleUser->getName(),
                    'role' => 'user',
                    'password' => bcrypt('12345678'),
                    'email_verified_at' => now(),
                ]);

                $avatarUrl = $googleUser->getAvatar();
                $imageContents = file_get_contents($avatarUrl);

                $fileName = 'avatar_' . time() . '.jpg';
                $path = 'public/images/' . $fileName;
                Storage::put($path, $imageContents);
                $newUser->gambar = $path;
                $newUser->save();

                Auth::login($newUser);
                flash('Berhasil Mendaftar! Password Anda Adalah "12345678", Silahkan rubah Password Anda Sesegera Mungkin Di Halaman Rubah/Forgot Password');
                return redirect()->to('/');
            }
        } catch (\Exception $e) {
            flash()->addError($e->getMessage());
            return redirect()->route('login');
        }
    }
}
