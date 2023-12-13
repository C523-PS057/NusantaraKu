<?php

namespace App\Http\Controllers;

use App\Models\Masakan;
use App\Models\Musik;
use App\Models\Pakaian;
use App\Models\Province;
use App\Models\Rumah;
use App\Models\Tari;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

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
                    $selectedValue = $request->input('filter-kategori');
                    $masakan = $masakanQuery->where('budaya_id', $filterKategori)->get();
                    $selectedData = $masakan->map(function ($item) {
                        if (isset($item->masakan_name)) {
                            $item->name = $item->masakan_name;
                            unset($item->masakan_name);
                        }
                        return $item;
                    });
                    $perPage = 12;
                    $page = request()->get('page', 1);
                    $offset = ($page - 1) * $perPage;
                    $slicedData = $selectedData->slice($offset, $perPage);
                    $paginator = new LengthAwarePaginator(
                        $slicedData,
                        $selectedData->count(),
                        $perPage,
                        $page,
                        ['path' => request()->url(), 'query' => request()->query()]
                    );
                    return view('main.all-budaya.semua', ['data' => $paginator, 'selectedValue' => $selectedValue]);
                    break;
                case '2':
                    // Jika musik yang dipilih
                    $selectedValue = $request->input('filter-kategori');
                    $musik = $musikQuery->where('budaya_id', $filterKategori)->get();
                    $selectedData = $musik->map(function ($item) {
                        if (isset($item->alat_musik_name)) {
                            $item->name = $item->alat_musik_name;
                            unset($item->alat_musik_name);
                        }
                        return $item;
                    });
                    $perPage = 12;
                    $page = request()->get('page', 1);
                    $offset = ($page - 1) * $perPage;
                    $slicedData = $selectedData->slice($offset, $perPage);
                    $paginator = new LengthAwarePaginator(
                        $slicedData,
                        $selectedData->count(),
                        $perPage,
                        $page,
                        ['path' => request()->url(), 'query' => request()->query()]
                    );
                    return view('main.all-budaya.semua', ['data' => $paginator, 'selectedValue' => $selectedValue]);
                    break;
                case '3':
                    // Jika pakaian yang dipilih
                    $selectedValue = $request->input('filter-kategori');
                    $pakaian = $pakaianQuery->where('budaya_id', $filterKategori)->get();
                    $selectedData = $pakaian->map(function ($item) {
                        if (isset($item->pakaian_name)) {
                            $item->name = $item->pakaian_name;
                            unset($item->pakaian_name);
                        }
                        return $item;
                    });
                    $perPage = 12;
                    $page = request()->get('page', 1);
                    $offset = ($page - 1) * $perPage;
                    $slicedData = $selectedData->slice($offset, $perPage);
                    $paginator = new LengthAwarePaginator(
                        $slicedData,
                        $selectedData->count(),
                        $perPage,
                        $page,
                        ['path' => request()->url(), 'query' => request()->query()]
                    );
                    return view('main.all-budaya.semua', ['data' => $paginator, 'selectedValue' => $selectedValue]);
                    break;
                case '4':
                    // Jika rumah yang dipilih
                    $selectedValue = $request->input('filter-kategori');
                    $rumah = $rumahQuery->where('budaya_id', $filterKategori)->get();
                    $selectedData = $rumah->map(function ($item) {
                        if (isset($item->rumah_adat_name)) {
                            $item->name = $item->rumah_adat_name;
                            unset($item->rumah_adat_name);
                        }
                        return $item;
                    });
                    $perPage = 12;
                    $page = request()->get('page', 1);
                    $offset = ($page - 1) * $perPage;
                    $slicedData = $selectedData->slice($offset, $perPage);
                    $paginator = new LengthAwarePaginator(
                        $slicedData,
                        $selectedData->count(),
                        $perPage,
                        $page,
                        ['path' => request()->url(), 'query' => request()->query()]
                    );
                    return view('main.all-budaya.semua', ['data' => $paginator, 'selectedValue' => $selectedValue]);
                    break;
                case '5':
                    // Jika tari yang dipilih
                    $selectedValue = $request->input('filter-kategori');
                    $tari = $tariQuery->where('budaya_id', $filterKategori)->get();
                    $selectedData = $tari->map(function ($item) {
                        if (isset($item->tarian_name)) {
                            $item->name = $item->tarian_name;
                            unset($item->tarian_name);
                        }
                        return $item;
                    });
                    $perPage = 12;
                    $page = request()->get('page', 1);
                    $offset = ($page - 1) * $perPage;
                    $slicedData = $selectedData->slice($offset, $perPage);
                    $paginator = new LengthAwarePaginator(
                        $slicedData,
                        $selectedData->count(),
                        $perPage,
                        $page,
                        ['path' => request()->url(), 'query' => request()->query()]
                    );
                    return view('main.all-budaya.semua', ['data' => $paginator, 'selectedValue' => $selectedValue]);
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
                $data = $masakan->concat($musik)->concat($pakaian)->concat($rumah)->concat($tari);
                $selectedData = $data->map(function ($item) {
                    if (isset($item->masakan_name)) {
                        $item->name = $item->masakan_name;
                        unset($item->masakan_name);
                    } elseif (isset($item->alat_musik_name)) {
                        $item->name = $item->alat_musik_name;
                        unset($item->alat_musik_name);
                    } elseif (isset($item->pakaian_name)) {
                        $item->name = $item->pakaian_name;
                        unset($item->pakaian_name);
                    } elseif (isset($item->rumah_adat_name)) {
                        $item->name = $item->rumah_adat_name;
                        unset($item->rumah_adat_name);
                    } elseif (isset($item->tarian_name)) {
                        $item->name = $item->tarian_name;
                        unset($item->tarian_name);
                    }
                    return $item;
                });
                $perPage = 12;
                $page = request()->get('page', 1);
                $offset = ($page - 1) * $perPage;
                $slicedData = $selectedData->slice($offset, $perPage);
                $paginator = new LengthAwarePaginator(
                    $slicedData,
                    $selectedData->count(),
                    $perPage,
                    $page,
                    ['path' => request()->url(), 'query' => request()->query()]
                );
                $selectedValue = $request->input('filter-provinsi');
                return view('main.all-budaya.semua', ['data' => $paginator, 'selectedValue' => $selectedValue]);
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
                    $data = $masakan->concat($musik)->concat($pakaian)->concat($rumah)->concat($tari);
                    $sortedData = $data->sortByDesc('created_at');
                    $selectedData = $sortedData->map(function ($item) {
                        if (isset($item->masakan_name)) {
                            $item->name = $item->masakan_name;
                            unset($item->masakan_name);
                        } elseif (isset($item->alat_musik_name)) {
                            $item->name = $item->alat_musik_name;
                            unset($item->alat_musik_name);
                        } elseif (isset($item->pakaian_name)) {
                            $item->name = $item->pakaian_name;
                            unset($item->pakaian_name);
                        } elseif (isset($item->rumah_adat_name)) {
                            $item->name = $item->rumah_adat_name;
                            unset($item->rumah_adat_name);
                        } elseif (isset($item->tarian_name)) {
                            $item->name = $item->tarian_name;
                            unset($item->tarian_name);
                        }
                        return $item;
                    });
                    $perPage = 12;
                    $page = request()->get('page', 1);
                    $offset = ($page - 1) * $perPage;
                    $slicedData = $sortedData->slice($offset, $perPage);
                    $paginator = new LengthAwarePaginator(
                        $slicedData,
                        $sortedData->count(),
                        $perPage,
                        $page,
                        ['path' => request()->url(), 'query' => request()->query()]
                    );
                    $selectedValue = 'terbaru';
                    return view('main.all-budaya.semua', ['data' => $paginator, 'selectedValue' => $selectedValue]);
                    break;
                case 'A-Z':
                    $sortedData = Masakan::with('province')->select('masakan_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar')
                        ->union(Musik::with('province')->select('alat_musik_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar'))
                        ->union(Pakaian::with('province')->select('pakaian_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar'))
                        ->union(Rumah::with('province')->select('rumah_adat_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar'))
                        ->union(Tari::with('province')->select('tarian_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar'))
                        ->orderBy('name')
                        ->get();
                    $perPage = 12;
                    $page = request()->get('page', 1);
                    $offset = ($page - 1) * $perPage;
                    $slicedData = $sortedData->slice($offset, $perPage);
                    $paginator = new LengthAwarePaginator(
                        $slicedData,
                        $sortedData->count(),
                        $perPage,
                        $page,
                        ['path' => request()->url(), 'query' => request()->query()]
                    );
                    $selectedValue = 'A-Z';
                    return view('main.all-budaya.semua', ['data' => $paginator, 'selectedValue' => $selectedValue]);
                    break;
                case 'Z-A':
                    $sortedData = Masakan::with('province')->select('masakan_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar')
                        ->union(Musik::with('province')->select('alat_musik_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar'))
                        ->union(Pakaian::with('province')->select('pakaian_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar'))
                        ->union(Rumah::with('province')->select('rumah_adat_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar'))
                        ->union(Tari::with('province')->select('tarian_name as name', 'id', 'deskripsi', 'sejarah', 'budaya_id', 'province_id', 'gambar'))
                        ->orderByDesc('name')
                        ->get();
                    $perPage = 12;
                    $page = request()->get('page', 1);
                    $offset = ($page - 1) * $perPage;
                    $slicedData = $sortedData->slice($offset, $perPage);
                    $paginator = new LengthAwarePaginator(
                        $slicedData,
                        $sortedData->count(),
                        $perPage,
                        $page,
                        ['path' => request()->url(), 'query' => request()->query()]
                    );
                    $selectedValue = 'Z-A';
                    return view('main.all-budaya.semua', ['data' => $paginator, 'selectedValue' => $selectedValue]);
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

        $data = $masakan->concat($musik)->concat($pakaian)->concat($rumah)->concat($tari);
        $selectedData = $data->map(function ($item) {
            if (isset($item->masakan_name)) {
                $item->name = $item->masakan_name;
                unset($item->masakan_name);
            } elseif (isset($item->alat_musik_name)) {
                $item->name = $item->alat_musik_name;
                unset($item->alat_musik_name);
            } elseif (isset($item->pakaian_name)) {
                $item->name = $item->pakaian_name;
                unset($item->pakaian_name);
            } elseif (isset($item->rumah_adat_name)) {
                $item->name = $item->rumah_adat_name;
                unset($item->rumah_adat_name);
            } elseif (isset($item->tarian_name)) {
                $item->name = $item->tarian_name;
                unset($item->tarian_name);
            }
            return $item;
        });
        $perPage = 12;
        $page = request()->get('page', 1);
        $offset = ($page - 1) * $perPage;
        $slicedData = $selectedData->slice($offset, $perPage);
        $paginator = new LengthAwarePaginator(
            $slicedData,
            $selectedData->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('main.all-budaya.semua', [
            'data' => $paginator,
            'selectedValue' => $selectedValue
        ]);
    }
}
