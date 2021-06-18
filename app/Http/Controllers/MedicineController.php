<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $medis = Medicine::all();

        return view('layouts.aside', compact('medis'));
    }
    // public function search(Request $request)
    // {
    //     if ($request->keyword) {

    //         $medicine = Medicine::where(
    //             'name',
    //             'like',
    //             "%" . $request->keyword . "%"
    //         )->paginate(20);
    //         $medicine->withPath('?keyword=' . $request->keyword);
    //     } else {
    //         $medicine = Medicine::paginate(20);
    //     }

    //     return view('views', [
    //         'medicine' => $medicine,
    //         'keyword' => $request->keyword
    //     ]);
    // }
}
