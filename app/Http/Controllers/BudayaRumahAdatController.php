<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Rumah;
use Illuminate\Http\Request;

class BudayaRumahAdatController extends Controller
{
    public function show(string $id)
    {
        $data = Rumah::findOrFail($id);
        $comments = $data->comment->where('rumah_id', $data->id);
        return view('main.budaya.rumah', [
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
            'rumah_id' => 'required',
        ];
        $rules = $request->validate($validatedData);
        Comment::create($rules);
        flash('Berhasil Menambah Komentar');
        return back();
    }
}
