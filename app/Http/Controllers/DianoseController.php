<?php

namespace App\Http\Controllers;

use App\Models\Dianose;
use Illuminate\Http\Request;

class DianoseController extends Controller
{
    public function index()
    {
        $cust = Dianose::all();
        return view('chan-doan.tram-cam.views', compact('cust'));
    }

    public function create()
    {
        return view('chan-doan.tram-cam.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('tram-cam.views'));
    }

    public function detail($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.tram-cam.index', ['model' => $model]);
    }

    public function update(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('tram-cam.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy($id, $input)
    {
        $model = Dianose::findOrFail($id);
        $model->delele();
        return redirect(route('chan-doan.tram-cam.views'));
    }

    // =========== Nghiện rượu
    public function index_ngruou()
    {
        $cust = Dianose::all();
        return view('chan-doan.nghien-ruou.views', compact('cust'));
    }

    public function create_ngruou()
    {
        return view('chan-doan.nghien-ruou.create');
    }

    public function store_ngruou(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('nghien-ruou.views'));
    }

    public function detail_ngruou($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.nghien-ruou.index', ['model' => $model]);
    }

    public function update_ngruou(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('nghien-ruou.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_ngruou($id, $input)
    {
        $model = Dianose::findOrFail($id);
        $model->delele();
        return redirect(route('nghien-ruou.views'));
    }

    // =========== Mất trí
    public function index_mattri()
    {
        $cust = Dianose::all();
        return view('chan-doan.mat-tri.views', compact('cust'));
    }

    public function create_mattri()
    {
        return view('chan-doan.mat-tri.create');
    }

    public function store_mattri(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Dianose::create($input);
        return redirect(route('mat-tri.views'));
    }

    public function detail_mattri($id, Request $request)
    {
        //==== Edit
        $model = Dianose::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('chan-doan.mat-tri.index', ['model' => $model]);
    }

    public function update_mattri(Request $request, $id)
    {
        $model = Dianose::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('mat-tri.views', ['model' => $model, 'input' => $input]));
    }
    public function destroy_mattri($id, $input)
    {
        $model = Dianose::findOrFail($id);
        $model->delele();
        return redirect(route('mat-tri.views'));
    }
}
