<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use App\Models\Masakan;
use App\Models\Musik;
use App\Models\Pakaian;
use App\Models\Rumah;
use App\Models\Tari;
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

    public function show(Province $province)
    {
        $masakan = Masakan::with('province')->where('province_id', $province->id)->get();
        $musik = Musik::with('province')->where('province_id', $province->id)->get();
        $pakaian = Pakaian::with('province')->where('province_id', $province->id)->get();
        $rumah = Rumah::with('province')->where('province_id', $province->id)->get();
        $tarian = Tari::with('province')->where('province_id', $province->id)->get();
        return view('admin.province.show', [
            'province' => $province,
            'masakan' => $masakan,
            'musik' => $musik,
            'pakaian' => $pakaian,
            'rumah' => $rumah,
            'tarian' => $tarian
        ]);
    }

    public function edit(Province $province)
    {
        return view('admin.province.edit', [
            'province' => $province
        ]);
    }

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
}
