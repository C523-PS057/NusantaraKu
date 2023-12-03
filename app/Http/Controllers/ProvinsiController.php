<?php

namespace App\Http\Controllers;

use App\Models\Masakan;
use App\Models\Musik;
use App\Models\Pakaian;
use App\Models\Province;
use App\Models\Rumah;
use App\Models\Tari;

class ProvinsiController extends Controller
{
    public function show($id)
    {
        $model = Province::find($id);
        if (!$model) {
            flash()->addError('Detail Provinsi Tidak Ditemukan');
            return back();
        }
        $provinsi = Province::findOrFail($id);
        $masakan = Masakan::with('province')->where('province_id', $provinsi->id)->get();
        $musik = Musik::with('province')->where('province_id', $provinsi->id)->get();
        $pakaian = Pakaian::with('province')->where('province_id', $provinsi->id)->get();
        $rumah = Rumah::with('province')->where('province_id', $provinsi->id)->get();
        $tarian = Tari::with('province')->where('province_id', $provinsi->id)->get();
        return view('main.provinsi.show', [
            'provinsi' => $provinsi,
            'masakan' => $masakan,
            'musik' => $musik,
            'pakaian' => $pakaian,
            'rumah' => $rumah,
            'tarian' => $tarian
        ]);
    }
}
