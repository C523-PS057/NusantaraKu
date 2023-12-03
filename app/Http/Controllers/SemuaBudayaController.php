<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Models\Masakan;
use App\Models\Musik;
use App\Models\Pakaian;
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
                    return view('main.all-budaya.semua', ['data' => $masakan]);
                    break;
                case '2':
                    // Jika musik yang dipilih
                    $musik[] = $musikQuery->where('budaya_id', $filterKategori)->get();
                    return view('main.all-budaya.semua', ['data' => $musik]);
                    break;
                case '3':
                    // Jika pakaian yang dipilih
                    $pakaian[] = $pakaianQuery->where('budaya_id', $filterKategori)->get();
                    return view('main.all-budaya.semua', ['data' => $pakaian]);
                    break;
                case '4':
                    // Jika rumah yang dipilih
                    $rumah[] = $rumahQuery->where('budaya_id', $filterKategori)->get();
                    return view('main.all-budaya.semua', ['data' => $rumah]);
                    break;
                case '5':
                    // Jika tari yang dipilih
                    $tari[] = $tariQuery->where('budaya_id', $filterKategori)->get();
                    return view('main.all-budaya.semua', ['data' => $tari]);
                    break;
                default:
                    // Default jika tidak ada kategori yang dipilih
                    break;
            }
        }


        $masakan = $masakanQuery->get();
        $musik = $musikQuery->get();
        $pakaian = $pakaianQuery->get();
        $rumah = $rumahQuery->get();
        $tari = $tariQuery->get();

        $data = [$masakan, $musik, $pakaian, $rumah, $tari];

        return view('main.all-budaya.semua', [
            'data' => collect($data)
        ]);
    }
}
