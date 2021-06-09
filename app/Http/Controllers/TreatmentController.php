<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        $treat = Treatment::all();
        return view('dieu-tri.tramcam.views', compact('treat'));
    }

    public function create()
    {
        return view('dieu-tri.tramcam.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Treatment::create($input);
        return redirect(route('tramcam.views'));
    }

    public function details($id, Request $request)
    {
        //==== Edit
        $model = Treatment::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('dieu-tri.tramcam.index', ['model' => $model]);
    }

    public function updated(Request $request, $id)
    {
        $model = Treatment::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('tramcam.views', ['model' => $model, 'input' => $input]));
    }
}
