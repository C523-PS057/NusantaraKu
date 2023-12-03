<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Tari;
use Illuminate\Http\Request;

class BudayaTariController extends Controller
{
    public function show($id)
    {
        $data = Tari::findOrFail($id);
        $comments = $data->comment->where('tari_id', $data->id);
        return view('main.budaya.tari', [
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
            'tari_id' => 'required',
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
