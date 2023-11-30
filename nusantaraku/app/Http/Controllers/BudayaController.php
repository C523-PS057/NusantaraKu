<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Http\Requests\StoreBudayaRequest;
use App\Http\Requests\UpdateBudayaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(Request $request)
    {
        $validatedData = [
            'category_name' => 'unique:budayas,category_name|required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        $rules = $request->validate($validatedData);
        $rules['gambar'] = $request->file('gambar')->store('/public/images');
        Budaya::create($rules);
        flash('Berhasil Menambahkan Data');
        return redirect()->route('budaya.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Budaya::findOrFail($id);
        return view('admin.category.show', [
            'category' => $category
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
        if ($request->category_name != $category->category_name) {
            $validatedData['category_name'] = 'required|unique:budayas,category_name|required';
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
    public function destroy($id)
    {
        $category = Budaya::findOrFail($id);
        Storage::delete($category->gambar);
        $category->delete();
        flash('Berhasil Menghapus Data');
        return back();
    }
}
