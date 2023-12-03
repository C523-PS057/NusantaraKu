<?php

namespace App\Http\Controllers;

use App\Models\Masakan;
use App\Models\Province;
use Illuminate\Http\Request;

class AllMasakanKhasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Masakan::with('province');
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data->search($search);
        } elseif ($request->filled('filter-provinsi')) {
            $provinceSearch = $request->input('filter-provinsi');
            $province = Province::search($provinceSearch)->first();
            if (!is_null($province)) {
                $data->where('province_id', $province->id);
            } else {
                flash()->addError('Data Tidak Ditemukan');
                return back();
            }
        } elseif ($request->filled('filter-query')) {
            $filterQuery = $request->input('filter-query');
            switch ($filterQuery) {
                case 'terbaru':
                    $data->latest();
                    break;
                case 'A-Z':
                    $data->orderBy('masakan_name', 'asc');
                    break;
                case 'Z-A':
                    $data->orderBy('masakan_name', 'desc');
                    break;
                default:
                    flash()->addError('Data Tidak Ditemukan');
                    return back();
            }
        }

        $data = $data->get();

        return view('main.all-budaya.masakan', [
            'data' => $data,
        ]);
    }
}
