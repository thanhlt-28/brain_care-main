<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function store(Request $request)
    {
        $pres = new Prescription();
        $pres->fill($request->all());
        $pres->save();

        return redirect(route('medicine'));
    }
}
