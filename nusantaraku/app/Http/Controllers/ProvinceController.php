<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $provinces = Province::search($search)->paginate(10);
        } else {
            $provinces = Province::paginate(10);
        }

        return view('admin.province.index', [
            'provinces' => $provinces
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
            'video_link' => 'required|max:2000',
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
            'video_link' => 'required|max:2000',
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
        if ($province->masakan->count() > 0) {
            foreach ($province->masakan as $masakan) {
                Storage::delete($masakan->gambar);
                $masakan->delete();
            }
        }
        if ($province->musik->count() > 0) {
            foreach ($province->musik as $musik) {
                Storage::delete($musik->gambar);
                $musik->delete();
            }
        }
        if ($province->pakaian->count() > 0) {
            foreach ($province->pakaian as $pakaian) {
                Storage::delete($pakaian->gambar);
                $pakaian->delete();
            }
        }
        if ($province->rumah->count() > 0) {
            foreach ($province->rumah as $rumah) {
                Storage::delete($rumah->gambar);
                $rumah->delete();
            }
        }
        if ($province->tari->count() > 0) {
            foreach ($province->tari as $tari) {
                Storage::delete($tari->gambar);
                $tari->delete();
            }
        }
        $province->delete();
        flash('Berhasil Menghapus Data');
        return back();
    }
}
