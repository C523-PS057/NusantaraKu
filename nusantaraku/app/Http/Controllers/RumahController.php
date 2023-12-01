<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use App\Http\Requests\StoreRumahRequest;
use App\Http\Requests\UpdateRumahRequest;
use App\Models\Budaya;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RumahController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data = Rumah::search($search)->latest()->paginate(10);
        } else {
            $data = Rumah::latest()->paginate(10);
        }
        return view('admin.rumah.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Budaya::where('category_name', 'LIKE', 'rumah adat')->first();
        if (!$category) {
            flash()->addError('Buat Budaya Dengan Nama "Rumah Adat" Terlebih Dahulu');
            return back();
        }
        $categories = $category->id;
        $province = Province::all();
        if ($province->count() < 1) {
            flash()->addError('Minimal Buat 1 Provinsi');
            return back();
        }
        return view('admin.rumah.create', [
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
            'rumah_adat_name' => 'required',
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
        Rumah::create($rules);
        flash('Berhasil Menambahkan data');
        return redirect()->route('rumah.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rumah $rumah)
    {
        $data = $rumah;
        return view('admin.rumah.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rumah $rumah)
    {
        $category = Budaya::where('category_name', 'LIKE', 'rumah adat')->first();
        $categories = $category->id;
        $province = Province::all();
        return view('admin.rumah.edit', [
            'categories' => $categories,
            'province' => $province,
            'data' => $rumah
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rumah $rumah)
    {
        $validatedData = [
            'rumah_adat_name' => 'required',
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
            Storage::delete($rumah->gambar);
            $rules['gambar'] = $request->file('gambar')->store('/public/images');
        }
        $rumah->update($rules);
        flash('Berhasil Mengubah data');
        return redirect()->route('rumah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rumah $rumah)
    {
        Storage::delete($rumah->gambar);
        $rumah->delete();
        flash('Berhasil Hapus Data');
        return back();
    }
}
