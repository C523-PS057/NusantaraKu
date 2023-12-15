<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Masakan;
use App\Models\Musik;
use App\Models\Pakaian;
use App\Models\Rumah;
use App\Models\Tari;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $totalUser = User::count();
        if ($request->filled('search')) {
            $search = $request->input('search');
            $users = User::search($search)->paginate(10);
        } else {
            $users = User::paginate(10);
        }

        return view('admin.data-user.index', [
            'totalUser' => $totalUser,
            'users' => $users
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $comments = Comment::where('user_id', $user->id)->get();
        if ($user->id == auth()->user()->id) {
            flash()->addError('Tidak Dapat Menghapus Diri Sendiri!');
            return back();
        }
        if ($user->role == 'admin') {
            flash()->addError('Tidak Dapat Menghapus Admin!');
            return back();
        }
        if ($user->gambar !== null) {
            Storage::delete($user->gambar);
        }
        foreach ($comments as $comment) {
            $comment->delete();
        }
        $user->delete();
        flash('Berhasil Menghapus Data User');
        return redirect()->route('data-user.index');
    }
}
