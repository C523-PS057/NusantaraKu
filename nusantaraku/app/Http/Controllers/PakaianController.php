<?php

namespace App\Http\Controllers;

use App\Models\Pakaian;
use App\Http\Requests\StorePakaianRequest;
use App\Http\Requests\UpdatePakaianRequest;
use App\Models\Budaya;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data = Pakaian::with('province')->search($search)->latest()->paginate(10);
        } else {
            $data = Pakaian::with('province')->latest()->paginate(10);
        }
        return view('admin.pakaian.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Budaya::where('id', 3)->first();
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
        return view('admin.pakaian.create', [
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
            'pakaian_name' => 'required',
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
        Pakaian::create($rules);
        flash('Berhasil Menambahkan data');
        return redirect()->route('pakaian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pakaian $pakaian)
    {
        $data = $pakaian;
        return view('admin.pakaian.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pakaian $pakaian)
    {
        $category = Budaya::where('id', 3)->first();
        if (!$category) {
            flash()->addError('Kategori Tidak Ditemukan');
            return back();
        }
        $categories = $category->id;
        $province = Province::all();
        return view('admin.pakaian.edit', [
            'categories' => $categories,
            'province' => $province,
            'data' => $pakaian
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pakaian $pakaian)
    {
        $validatedData = [
            'pakaian_name' => 'required',
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
            Storage::delete($pakaian->gambar);
            $rules['gambar'] = $request->file('gambar')->store('/public/images');
        }
        $pakaian->update($rules);
        flash('Berhasil Mengubah data');
        return redirect()->route('pakaian.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pakaian $pakaian)
    {
        Storage::delete($pakaian->gambar);
        $pakaian->delete();
        flash('Berhasil Hapus Data');
        return back();
    }
}
