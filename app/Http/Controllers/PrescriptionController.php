<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Helpers\Helper;

class PrescriptionController extends Controller
{
    public function store(Request $request)
    {
        $pre_name = $request->Name;

        $CustID = Helper::IDGenerator(new Prescription, 'CustID', 10, 'BRC-');

        $p = new Prescription();
        $p->CustID = $CustID;
        $p->Name = $pre_name;
        $p->save();
        // $pres = Prescription::generate(['table' => 'prescription', 'length' => 10, 'prefix' => 'BRC-']);
        // //output: INV-000001
        // var_dump($pres);
        // $pres->fill($request->all());
        // $pres->save();

        return redirect(route('layout.formMultiple'));
    }
}
