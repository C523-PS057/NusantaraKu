<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Http\Requests\StoreBudayaRequest;
use App\Http\Requests\UpdateBudayaRequest;
use App\Models\Masakan;
use App\Models\Musik;
use App\Models\Pakaian;
use App\Models\Rumah;
use App\Models\Tari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $category = Budaya::search($search)->paginate(10);
        } else {
            $category = Budaya::paginate(10);
        }
        return view('admin.category.index', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $validatedData = [
    //         'category_name' => 'unique:budayas,category_name|required',
    //         'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ];
    //     $rules = $request->validate($validatedData);
    //     $rules['gambar'] = $request->file('gambar')->store('/public/images');
    //     Budaya::create($rules);
    //     flash('Berhasil Menambahkan Data');
    //     return redirect()->route('budaya.index');
    // }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Budaya::findOrFail($id);
        $masakan = Masakan::with(['budaya', 'province'])->where('budaya_id', $category->id)->get();
        $musik = Musik::with(['budaya', 'province'])->where('budaya_id', $category->id)->get();
        $pakaian = Pakaian::with(['budaya', 'province'])->where('budaya_id', $category->id)->get();
        $rumah = Rumah::with(['budaya', 'province'])->where('budaya_id', $category->id)->get();
        $tari = Tari::with(['budaya', 'province'])->where('budaya_id', $category->id)->get();
        return view('admin.category.show', [
            'category' => $category,
            'masakan' => $masakan,
            'musik' => $musik,
            'pakaian' => $pakaian,
            'rumah' => $rumah,
            'tari' => $tari
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $budaya = Budaya::findOrFail($id);
        return view('admin.category.edit', [
            'category' => $budaya
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Budaya::findOrFail($id);
        $validatedData = [
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        // if ($request->category_name != $category->category_name) {
        //     $validatedData['category_name'] = 'required|unique:budayas,category_name|required';
        // }
        if ($request->has('category_name')) {
            flash('Tidak Bisa Merubah Nama Atribut');
            return back();
        }
        $rules = $request->validate($validatedData);
        if ($request->hasFile('gambar')) {
            $rules['gambar'] = $request->file('gambar')->store('/public/images');
            Storage::delete($category->gambar);
        }
        $category->update($rules);
        flash('Berhasil Mengubah Data');
        return redirect()->route('budaya.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     $category = Budaya::findOrFail($id);
    //     if ($category->masakan->count() > 0) {
    //         foreach ($category->masakan as $masakan) {
    //             Storage::delete($masakan->gambar);
    //             $masakan->delete();
    //         }
    //     }
    //     if ($category->musik->count() > 0) {
    //         foreach ($category->musik as $musik) {
    //             Storage::delete($musik->gambar);
    //             $musik->delete();
    //         }
    //     }
    //     if ($category->pakaian->count() > 0) {
    //         foreach ($category->pakaian as $pakaian) {
    //             Storage::delete($pakaian->gambar);
    //             $pakaian->delete();
    //         }
    //     }
    //     if ($category->rumah->count() > 0) {
    //         foreach ($category->rumah as $rumah) {
    //             Storage::delete($rumah->gambar);
    //             $rumah->delete();
    //         }
    //     }
    //     if ($category->tari->count() > 0) {
    //         foreach ($category->tari as $tari) {
    //             Storage::delete($tari->gambar);
    //             $tari->delete();
    //         }
    //     }
    //     Storage::delete($category->gambar);
    //     $category->delete();
    //     flash('Berhasil Menghapus Data');
    //     return back();
    // }
}
