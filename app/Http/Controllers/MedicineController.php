<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        return view('diagnose.index');
    }

    public function AutoSearch(Request $request)
    {
        $search = $request->get('term');

        $result = Medicine::where('name', 'LIKE', '%' . $search . '%')->get();

        return response()->json($result);

        // $medis = Medicine::all();

        // if ($request->has('q')) {
        //     $search = $request->q;
        //     $medis = Medicine::input("id", "name")
        //         ->where('name', 'LIKE', "%$search%")
        //         ->get();
        // }
        // return response()->json($medis);
    }
}
