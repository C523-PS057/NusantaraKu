<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Tari;
use Illuminate\Http\Request;

class AllTariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data = Tari::with('province')->search($search)->latest()->get();
        } else if ($request->filled('filter-provinsi')) {
            $provinceSearch = $request->input('filter-provinsi');
            $province = Province::search($provinceSearch)->first();
            if (!is_null($province)) {
                $data = Tari::with('province')->where('province_id', $province->id)->latest()->get();
            } else {
                flash()->addError('Data Tidak Ditemukan');
                return back();
            }
        } else if ($request->filled('filter-query')) {
            $cekValue = $request->toArray($request->query);
            if ($cekValue['filter-query'] == 'terbaru') {
                $data = Tari::with('province')->latest()->get();
            } else if ($cekValue['filter-query'] == 'A-Z') {
                $data = Tari::with('province')
                    ->orderBy('tarian_name', 'asc')
                    ->get();
            } else if ($cekValue['filter-query'] == 'Z-A') {
                $data = Tari::with('province')
                    ->orderBy('tarian_name', 'desc')
                    ->get();
            } else {
                flash()->addError('Data Tidak Ditemukan');
                return back();
            }
        } else {
            $data = Tari::with('province')->latest()->get();
        }
        return view('main.all-budaya.tari', [
            'data' => $data,
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
