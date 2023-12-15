<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Pakaian;
use Illuminate\Http\Request;

class BudayaPakaianController extends Controller
{
    public function show(string $id)
    {
        $data = Pakaian::findOrFail($id);
        $comments = $data->comment->where('pakaian_id', $data->id);
        return view('main.budaya.pakaian', [
            'data' => $data,
            'comments' => $comments
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = [
            'user_id' => 'required',
            'body_comment' => 'required',
            'budaya_id' => 'required',
            'pakaian_id' => 'required',
        ];
        $rules = $request->validate($validatedData);
        Comment::create($rules);
        flash('Berhasil Menambah Komentar');
        return back();
    }
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        flash("Berhasil Menghapus Data");
        return back();
    }
}
