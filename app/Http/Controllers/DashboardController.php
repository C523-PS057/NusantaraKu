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

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $totalBudaya = $totalBudaya = DB::table('masakans')
            ->selectRaw('COUNT(*) as count')
            ->unionAll(DB::table('pakaians')->selectRaw('COUNT(*)'))
            ->unionAll(DB::table('taris')->selectRaw('COUNT(*)'))
            ->unionAll(DB::table('rumahs')->selectRaw('COUNT(*)'))
            ->unionAll(DB::table('musiks')->selectRaw('COUNT(*)'))
            ->sum('count');
        $totalUser = User::count();
        $totalComment = Comment::count();

        return view('admin.dashboard', [
            'totalBudaya' => $totalBudaya,
            'totalUser' => $totalUser,
            'totalComment' => $totalComment,
        ]);
    }
}