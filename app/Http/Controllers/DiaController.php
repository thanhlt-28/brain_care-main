<?php

namespace App\Http\Controllers;

use App\Models\Diagnose;
use App\Models\Medicine;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pres = Medicine::all();
        return view('diagnose.index');
    }
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     $input['category'] = $request->input('category');
    //     Diagnose::create($input);
    //     return redirect()->route('diagnose.index');
    // }
    public function getAllFields(Request $request)
    {
        $query = $request->get('term', '');
        $medicine = Medicine::all();
        dd($medicine);
        if ($request->type == 'medicineName') {
            $medicine->where('name', 'LIKE', '%' . $query . '%');
        }
        if ($request->type == 'type_code') {
            $medicine->where('type', 'LIKE', '%' . $query . '%');
        }
        $medicine = $medicine->get('_');
        $data = array();
        foreach ($medicine as $country) {
            $data[] = array('name' => $country->name, 'type' => $country->type);
        }
        if (count($data))
            return $data;
        else
            return ['name' => '', 'type' => ''];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Diagnose::find($id);
        $cates = Diagnose::pluck('category');
        if (!$model) return redirect(route('diagnose.index'));
        return view('diagnose.edit', ['model' => $model, 'cates' => $cates]);
        // $dia = Diagnose::find($id);
        // return view('diagnose.edit', compact('dia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnose $model)
    {
        $model->update($request->all());
        $input['category'] = $request->input('category');
        return redirect()->route('diagnose.index',);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
