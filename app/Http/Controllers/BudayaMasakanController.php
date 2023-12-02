<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Masakan;
use Illuminate\Http\Request;

class BudayaMasakanController extends Controller
{
    public function show($id)
    {
        $data = Masakan::findOrFail($id);
        $comments = $data->comment->where('masakan_id', $data->id);
        return view('main.budaya.masakan', [
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
            'masakan_id' => 'required',
        ];
        $rules = $request->validate($validatedData);
        Comment::create($rules);
        flash('Berhasil Menambah Komentar');
        return back();
    }
}
