<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $province = Province::all();

        return view('admin.province.index', [
            'province' => $province
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.province.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = [
            'province_name' => 'required|max:255',
            'video_link' => 'required',
            'deskripsi' => 'required',
            'sejarah' => 'required',
        ];
        $rules = $request->validate($validatedData);
        $rules['deskripsi'] = strip_tags($request->deskripsi);
        $rules['sejarah'] = strip_tags($request->sejarah);
        Province::create($rules);
        flash('Berhasil Menambahkan data');
        return redirect()->route('province.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        return view('admin.province.show', [
            'province' => $province
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        return view('admin.province.edit', [
            'province' => $province
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        $validatedData = [
            'province_name' => 'required|max:255',
            'video_link' => 'required',
            'deskripsi' => 'required',
            'sejarah' => 'required',
        ];
        $rules = $request->validate($validatedData);
        $rules['deskripsi'] = strip_tags($request->deskripsi);
        $rules['sejarah'] = strip_tags($request->sejarah);
        $province->update($rules);
        flash('Berhasil Mengubah data');
        return redirect()->route('province.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        $province->delete();
        flash()->addError('Berhasil Menghapus Data');
        return back();
    }
}
