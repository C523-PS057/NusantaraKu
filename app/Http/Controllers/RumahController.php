<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use App\Models\Budaya;
use App\Models\Comment;
use App\Models\Province;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRumahRequest;
use App\Http\Requests\UpdateRumahRequest;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class RumahController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data = Rumah::with('province')->search($search)->latest()->paginate(10);
        } else {
            $data = Rumah::with('province')->latest()->paginate(10);
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
        $category = Budaya::where('id', 4)->first();
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
        $category = Budaya::where('id', 4)->first();
        if (!$category) {
            flash()->addError('Kategori Tidak Ditemukan');
            return back();
        }
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
            Storage::delete('/public/' . $rumah->gambar);
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
        $rumah->update($rules);
        flash('Berhasil Mengubah data');
        return redirect()->route('rumah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rumah $rumah)
    {
        $gambarPath = $rumah->gambar;
        if ($rumah->comment) {
            Comment::where('rumah_id', $rumah->id)->delete();
        }
        if (Storage::exists('/public/' . $gambarPath)) {
            $deleted = Storage::delete('/public/' . $gambarPath);
            if ($deleted) {
                $rumah->delete();
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
