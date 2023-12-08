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

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $masakan = Masakan::count();
        $pakaian = Pakaian::count();
        $tari = Tari::count();
        $rumah = Rumah::count();
        $musik = Musik::count();
        $totalBudaya = $masakan + $pakaian + $tari + $rumah + $musik;
        $totalUser = User::count();
        $totalComment = Comment::count();
        if ($request->filled('search')) {
            $search = $request->input('search');
            $users = User::search($search)->paginate(10);
        } else {
            $users = User::paginate(10);
        }

        return view('admin.data-user.index', [
            'totalBudaya' => $totalBudaya,
            'totalUser' => $totalUser,
            'totalComment' => $totalComment,
            'users' => $users
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
