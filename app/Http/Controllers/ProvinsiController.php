<?php

namespace App\Http\Controllers;

use App\Models\Masakan;
use App\Models\Musik;
use App\Models\Pakaian;
use App\Models\Province;
use App\Models\Rumah;
use App\Models\Tari;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        $provinsi = Province::findOrFail($id);
        $masakan = Masakan::with('province')->where('province_id', $provinsi->id)->get();
        $musik = Musik::with('province')->where('province_id', $provinsi->id)->get();
        $pakaian = Pakaian::with('province')->where('province_id', $provinsi->id)->get();
        $rumah = Rumah::with('province')->where('province_id', $provinsi->id)->get();
        $tarian = Tari::with('province')->where('province_id', $provinsi->id)->get();
        return view('main.provinsi.show', [
            'provinsi' => $provinsi,
            'masakan' => $masakan,
            'musik' => $musik,
            'pakaian' => $pakaian,
            'rumah' => $rumah,
            'tarian' => $tarian
        ]);
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
