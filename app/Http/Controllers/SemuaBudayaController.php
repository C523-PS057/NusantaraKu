<?php

namespace App\Http\Controllers;

use App\Models\Masakan;
use App\Models\Musik;
use App\Models\Pakaian;
use App\Models\Province;
use App\Models\Rumah;
use App\Models\Tari;
use Illuminate\Http\Request;

class SemuaBudayaController extends Controller
{
    public function index(Request $request)
    {
        $masakanQuery = Masakan::with('province');
        $musikQuery = Musik::with('province');
        $pakaianQuery = Pakaian::with('province');
        $rumahQuery = Rumah::with('province');
        $tariQuery = Tari::with('province');
        $selectedValue = null;
        if ($request->filled('search')) {
            $search = $request->input('search');
            $masakanQuery->search($search);
            $musikQuery->search($search);
            $pakaianQuery->search($search);
            $rumahQuery->search($search);
            $tariQuery->search($search);
        }
        if ($request->filled('filter-kategori')) {
            $filterKategori = $request->input('filter-kategori');

            switch ($filterKategori) {
                case '1':
                    // Jika masakan yang dipilih
                    $masakan[] = $masakanQuery->where('budaya_id', $filterKategori)->get();
                    $selectedValue = $request->input('filter-kategori');
                    return view('main.all-budaya.semua', ['data' => $masakan, 'selectedValue' => $selectedValue]);
                    break;
                case '2':
                    // Jika musik yang dipilih
                    $musik[] = $musikQuery->where('budaya_id', $filterKategori)->get();
                    $selectedValue = $request->input('filter-kategori');
                    return view('main.all-budaya.semua', ['data' => $musik, 'selectedValue' => $selectedValue]);
                    break;
                case '3':
                    // Jika pakaian yang dipilih
                    $pakaian[] = $pakaianQuery->where('budaya_id', $filterKategori)->get();
                    $selectedValue = $request->input('filter-kategori');
                    return view('main.all-budaya.semua', ['data' => $pakaian, 'selectedValue' => $selectedValue]);
                    break;
                case '4':
                    // Jika rumah yang dipilih
                    $rumah[] = $rumahQuery->where('budaya_id', $filterKategori)->get();
                    $selectedValue = $request->input('filter-kategori');
                    return view('main.all-budaya.semua', ['data' => $rumah, 'selectedValue' => $selectedValue]);
                    break;
                case '5':
                    // Jika tari yang dipilih
                    $selectedValue = $request->input('filter-kategori');
                    $tari[] = $tariQuery->where('budaya_id', $filterKategori)->get();
                    return view('main.all-budaya.semua', ['data' => $tari, 'selectedValue' => $selectedValue]);
                    break;
                default:
                    flash()->addError('Data Tidak Ditemukan');
                    return back();
                    break;
            }
        }
        if ($request->filled('filter-provinsi')) {
            $provinceSearch = $request->input('filter-provinsi');
            $province = Province::search($provinceSearch)->first();
            if (!is_null($province)) {
                $masakan = $masakanQuery->where('province_id', $province->id)->get();
                $musik = $musikQuery->where('province_id', $province->id)->get();
                $pakaian = $pakaianQuery->where('province_id', $province->id)->get();
                $rumah = $rumahQuery->where('province_id', $province->id)->get();
                $tari = $tariQuery->where('province_id', $province->id)->get();
                $data = [$masakan, $musik, $pakaian, $rumah, $tari];
                $selectedValue = $request->input('filter-provinsi');
                return view('main.all-budaya.semua', ['data' => $data, 'selectedValue' => $selectedValue]);
            } else {
                flash()->addError('Data Tidak Ditemukan');
                return back();
            }
        }
        if ($request->filled('filter-query')) {
            $filterQuery = $request->input('filter-query');
            switch ($filterQuery) {
                case 'terbaru':
                    $masakan = $masakanQuery->latest()->get();
                    $musik = $musikQuery->latest()->get();
                    $pakaian = $pakaianQuery->latest()->get();
                    $rumah = $rumahQuery->latest()->get();
                    $tari = $tariQuery->latest()->get();
                    $data = [$masakan, $musik, $pakaian, $rumah, $tari];
                    $selectedValue = 'terbaru';
                    return view('main.all-budaya.semua', ['data' => $data, 'selectedValue' => $selectedValue]);
                    break;
                case 'A-Z':
                    $masakan = $masakanQuery->orderBy('masakan_name', 'asc')->get();
                    $musik = $musikQuery->orderBy('alat_musik_name', 'asc')->get();
                    $pakaian = $pakaianQuery->orderBy('pakaian_name', 'asc')->get();
                    $rumah = $rumahQuery->orderBy('rumah_adat_name', 'asc')->get();
                    $tari = $tariQuery->orderBy('tarian_name', 'asc')->get();
                    $data = [$masakan, $musik, $pakaian, $rumah, $tari];
                    $selectedValue = 'A-Z';
                    return view('main.all-budaya.semua', ['data' => $data, 'selectedValue' => $selectedValue]);
                    break;
                case 'Z-A':
                    $masakan = $masakanQuery->orderBy('masakan_name', 'desc')->get();
                    $musik = $musikQuery->orderBy('alat_musik_name', 'desc')->get();
                    $pakaian = $pakaianQuery->orderBy('pakaian_name', 'desc')->get();
                    $rumah = $rumahQuery->orderBy('rumah_adat_name', 'desc')->get();
                    $tari = $tariQuery->orderBy('tarian_name', 'desc')->get();
                    $data = [$masakan, $musik, $pakaian, $rumah, $tari];
                    $selectedValue = 'Z-A';
                    return view('main.all-budaya.semua', ['data' => $data, 'selectedValue' => $selectedValue]);
                    break;
                default:
                    flash()->addError('Data Tidak Ditemukan');
                    return back();
            }
        }


        $masakan = $masakanQuery->get();
        $musik = $musikQuery->get();
        $pakaian = $pakaianQuery->get();
        $rumah = $rumahQuery->get();
        $tari = $tariQuery->get();

        $data = [$masakan, $musik, $pakaian, $rumah, $tari];

        return view('main.all-budaya.semua', [
            'data' => collect($data),
            'selectedValue' => $selectedValue
        ]);
    }
}
