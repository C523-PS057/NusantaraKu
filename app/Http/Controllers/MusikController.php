<?php

namespace App\Http\Controllers;

use App\Models\Musik;
use App\Http\Requests\StoreMusikRequest;
use App\Http\Requests\UpdateMusikRequest;
use App\Models\Budaya;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data = Musik::with('province')->search($search)->latest()->paginate(10);
        } else {
            $data = Musik::with('province')->latest()->paginate(10);
        }
        return view('admin.musik.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Budaya::where('id', 2)->first();
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
        return view('admin.musik.create', [
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
            'alat_musik_name' => 'required',
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
        Musik::create($rules);
        flash('Berhasil Menambahkan data');
        return redirect()->route('musik.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Musik $musik)
    {
        $data = $musik;
        return view('admin.musik.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Musik $musik)
    {
        $category = Budaya::where('id', 2)->first();
        if (!$category) {
            flash()->addError('Kategori Tidak Ditemukan');
            return back();
        }
        $categories = $category->id;
        $province = Province::all();
        return view('admin.musik.edit', [
            'categories' => $categories,
            'province' => $province,
            'data' => $musik
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Musik $musik)
    {
        $validatedData = [
            'alat_musik_name' => 'required',
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
            Storage::delete($musik->gambar);
            $rules['gambar'] = $request->file('gambar')->store('/public/images');
        }
        $musik->update($rules);
        flash('Berhasil Mengubah data');
        return redirect()->route('musik.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Musik $musik)
    {
        Storage::delete($musik->gambar);
        $musik->delete();
        flash('Berhasil Hapus Data');
        return back();
    }
}
