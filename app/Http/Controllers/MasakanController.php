<?php

namespace App\Http\Controllers;

use App\Models\Masakan;
use App\Http\Requests\StoreMasakanRequest;
use App\Http\Requests\UpdateMasakanRequest;
use App\Models\Budaya;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MasakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data = Masakan::with('province')->search($search)->latest()->paginate(10);
        } else {
            $data = Masakan::with('province')->latest()->paginate(10);
        }
        return view('admin.masakan.index', [
            'data' => $data
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Budaya::where('id', 1)->first();
        if (!$category) {
            flash()->addError('Kategori Tidak Ditemukan');
            return back();
        }
        $categories = $category->id;
        $province = Province::all();
        if ($province->count() < 1) {
            flash()->addError('Minimal Buat 1 Provinsi');
            return back();
        }
        return view('admin.masakan.create', [
            'categories' => $categories,
            'province' => $province
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = [
            'masakan_name' => 'required',
            'budaya_id' => 'required|exists:budayas,id',
            'province_id' => 'required',
            'sejarah' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ];
        $rules = $request->validate($validatedData);
        $rules['deskripsi'] = strip_tags($request->deskripsi);
        $rules['sejarah'] = strip_tags($request->sejarah);
        $rules['gambar'] = $request->file('gambar')->store('/public/images');
        Masakan::create($rules);
        flash('Berhasil Menambahkan data');
        return redirect()->route('masakan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Masakan $masakan)
    {
        $data = $masakan;
        return view('admin.masakan.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Masakan $masakan)
    {
        $category = Budaya::where('id', 1)->first();
        if (!$category) {
            flash()->addError('Kategori Tidak Ditemukan');
            return back();
        }
        $categories = $category->id;
        $province = Province::all();
        return view('admin.masakan.edit', [
            'categories' => $categories,
            'province' => $province,
            'data' => $masakan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Masakan $masakan)
    {
        $validatedData = [
            'masakan_name' => 'required',
            'budaya_id' => 'required|exists:budayas,id',
            'province_id' => 'required',
            'sejarah' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ];
        $rules = $request->validate($validatedData);
        $rules['deskripsi'] = strip_tags($request->deskripsi);
        $rules['sejarah'] = strip_tags($request->sejarah);
        if ($request->hasFile('gambar')) {
            Storage::delete($masakan->gambar);
            $rules['gambar'] = $request->file('gambar')->store('/public/images');
        }
        $masakan->update($rules);
        flash('Berhasil Mengubah data');
        return redirect()->route('masakan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Masakan $masakan)
    {
        Storage::delete($masakan->gambar);
        $masakan->delete();
        flash('Berhasil Hapus Data');
        return back();
    }
}