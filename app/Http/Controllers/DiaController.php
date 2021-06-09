<?php

namespace App\Http\Controllers;

use App\Models\Diagnose;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dia = Diagnose::all();
        return view('diagnose.multipleCheckbox', compact('dia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnose.formMultipleCheckbox');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['category'] = $request->input('category');
        Diagnose::create($input);
        return redirect()->route('diagnose.index');
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
