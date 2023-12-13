<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data = Comment::with(['user', 'budaya'])->search($search)->latest()->paginate(12);
        } else {
            $data = Comment::with(['user', 'budaya'])->latest()->paginate(12);
        }
        return view('admin.comment.index', [
            'data' => $data,
        ]);
    }
    public function destroy($id)
    {
        $data = Comment::findOrFail($id);
        $data->delete();
        flash('Berhasil Hapus Data!');
        return back();
    }
}
