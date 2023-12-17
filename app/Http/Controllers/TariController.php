<?php

namespace App\Http\Controllers;

use App\Models\Tari;
use App\Models\Budaya;
use App\Models\Province;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTariRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateTariRequest;
use App\Models\Comment;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class TariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data = Tari::with('province')->search($search)->latest()->paginate(10);
        } else {
            $data = Tari::with('province')->latest()->paginate(10);
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
        $category = Budaya::where('id', 5)->first();
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

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $imageName);

            $fullFilePath = storage_path('app/' . $path);

            ImageOptimizer::optimize($fullFilePath);

            $newImageName = Str::replaceLast($image->getClientOriginalExtension(), 'webp', $imageName);
            $newFilePath = storage_path('app/public/images/' . $newImageName);

            $image = imagecreatefromstring(file_get_contents($fullFilePath));
            imagewebp($image, $newFilePath, 80);
            unlink($fullFilePath);
            $rules['gambar'] = 'images/' . $newImageName;
        }

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
        $category = Budaya::where('id', 5)->first();
        if (!$category) {
            flash()->addError('Kategori Tidak Ditemukan');
            return back();
        }
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
            Storage::delete('/public/' . $tari->gambar);
            $image = $request->file('gambar');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $imageName);

            $fullFilePath = storage_path('app/' . $path);

            ImageOptimizer::optimize($fullFilePath);

            $newImageName = Str::replaceLast($image->getClientOriginalExtension(), 'webp', $imageName);
            $newFilePath = storage_path('app/public/images/' . $newImageName);

            $image = imagecreatefromstring(file_get_contents($fullFilePath));
            imagewebp($image, $newFilePath, 80);
            unlink($fullFilePath);
            $rules['gambar'] = 'images/' . $newImageName;
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
        $gambarPath = $tari->gambar;
        if ($tari->comment) {
            Comment::where('tari_id', $tari->id)->delete();
        }
        if (Storage::exists('/public/' . $gambarPath)) {
            $deleted = Storage::delete('/public/' . $gambarPath);
            if ($deleted) {
                $tari->delete();
                flash('Berhasil Hapus Data dan Gambar');
            } else {
                flash('Gagal Hapus Gambar');
            }
        } else {
            flash('Path Gambar Tidak Ditemukan');
        }

        return back();
    }
}
