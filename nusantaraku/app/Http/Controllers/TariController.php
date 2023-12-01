<?php

namespace App\Http\Controllers;

use App\Models\Tari;
use App\Http\Requests\StoreTariRequest;
use App\Http\Requests\UpdateTariRequest;
use App\Models\Budaya;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data = Tari::search($search)->latest()->paginate(10);
        } else {
            $data = Tari::latest()->paginate(10);
        }
        return view('admin.tari.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Budaya::where('category_name', 'LIKE', 'tarian')->first();
        if (!$category) {
            flash()->addError('Buat Budaya Dengan Nama "Tarian" Terlebih Dahulu');
            return back();
        }
        $categories = $category->id;
        $province = Province::all();
        if ($province->count() < 1) {
            flash()->addError('Minimal Buat 1 Provinsi');
            return back();
        }
        return view('admin.tari.create', [
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
            'tarian_name' => 'required',
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
        Tari::create($rules);
        flash('Berhasil Menambahkan data');
        return redirect()->route('tari.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tari $tari)
    {
        $data = $tari;
        return view('admin.tari.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tari $tari)
    {
        $category = Budaya::where('category_name', 'LIKE', 'tarian')->first();
        $categories = $category->id;
        $province = Province::all();
        return view('admin.tari.edit', [
            'categories' => $categories,
            'province' => $province,
            'data' => $tari
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tari $tari)
    {
        $validatedData = [
            'tarian_name' => 'required',
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
            Storage::delete($tari->gambar);
            $rules['gambar'] = $request->file('gambar')->store('/public/images');
        }
        $tari->update($rules);
        flash('Berhasil Mengubah data');
        return redirect()->route('tari.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tari $tari)
    {
        Storage::delete($tari->gambar);
        $tari->delete();
        flash('Berhasil Hapus Data');
        return back();
    }
}
