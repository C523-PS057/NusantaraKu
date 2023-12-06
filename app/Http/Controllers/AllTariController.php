<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Tari;
use Illuminate\Http\Request;

class AllTariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Tari::with('province');
        $selectedValue = '';
        if ($request->filled('search')) {
            $search = $request->input('search');
            $data->search($search);
        } elseif ($request->filled('filter-provinsi')) {
            $provinceSearch = $request->input('filter-provinsi');
            $province = Province::search($provinceSearch)->first();
            $selectedValue = $request->input('filter-provinsi');
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
                    $selectedValue = $request->input('filter-query');
                    $data->latest();
                    break;
                case 'A-Z':
                    $selectedValue = $request->input('filter-query');
                    $data->orderBy('tarian_name', 'asc');
                    break;
                case 'Z-A':
                    $selectedValue = $request->input('filter-query');
                    $data->orderBy('tarian_name', 'desc');
                    break;
                default:
                    flash()->addError('Data Tidak Ditemukan');
                    return back();
            }
        }

        $data = $data->get();

        return view('main.all-budaya.tari', [
            'data' => $data,
            'selectedValue' => $selectedValue
        ]);
    }
}
