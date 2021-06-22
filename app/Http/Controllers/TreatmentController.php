<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function stores(Request $request)
    {
        $pres = new Prescription();
        $pres->fill($request->all());
        $pres->save();

        return redirect(route('diagnose.medicine'));
    }
    //============== Trầm cảm
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

    // ============= Nghiện rượu
    public function index_ngruou()
    {
        $treat = Treatment::all();
        return view('dieu-tri.nghienruou.views', compact('treat'));
    }

    public function create_ngruou()
    {
        return view('dieu-tri.nghienruou.create');
    }

    public function store_ngruou(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Treatment::create($input);
        return redirect(route('nghienruou.views'));
    }

    public function details_ngruou($id)
    {
        //==== Edit
        $model = Treatment::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('dieu-tri.nghienruou.index', ['model' => $model]);
    }

    public function updated_ngruou(Request $request, $id)
    {
        $model = Treatment::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('nghienruou.views', ['model' => $model, 'input' => $input]));
    }

    //================ Mất trí
    public function index_mattri()
    {
        $treat = Treatment::all();
        return view('dieu-tri.mattri.views', compact('treat'));
    }

    public function create_mattri()
    {
        return view('dieu-tri.mattri.create');
    }

    public function store_mattri(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Treatment::create($input);
        return redirect(route('mattri.views'));
    }

    public function details_mattri($id)
    {
        //==== Edit
        $model = Treatment::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('dieu-tri.mattri.index', ['model' => $model]);
    }

    public function updated_mattri(Request $request, $id)
    {
        $model = Treatment::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('mattri.views', ['model' => $model, 'input' => $input]));
    }


    //================ Loạn thần
    public function index_loanthan()
    {
        $treat = Treatment::all();
        return view('dieu-tri.loanthan.views', compact('treat'));
    }

    public function create_loanthan()
    {
        return view('dieu-tri.loanthan.create');
    }

    public function store_loanthan(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Treatment::create($input);
        return redirect(route('loanthan.views'));
    }

    public function details_loanthan($id)
    {
        //==== Edit
        $model = Treatment::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('dieu-tri.loanthan.index', ['model' => $model]);
    }

    public function updated_loanthan(Request $request, $id)
    {
        $model = Treatment::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('loanthan.views', ['model' => $model, 'input' => $input]));
    }
    //================ Lo âu
    public function index_loau()
    {
        $treat = Treatment::all();
        return view('dieu-tri.loau.views', compact('treat'));
    }

    public function create_loau()
    {
        return view('dieu-tri.loau.create');
    }

    public function store_loau(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Treatment::create($input);
        return redirect(route('loau.views'));
    }

    public function details_loau($id)
    {
        //==== Edit
        $model = Treatment::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('dieu-tri.loau.index', ['model' => $model]);
    }

    public function updated_loau(Request $request, $id)
    {
        $model = Treatment::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('loau.views', ['model' => $model, 'input' => $input]));
    }

    //================ Hưng cảm
    public function index_hcam()
    {
        $treat = Treatment::all();
        return view('dieu-tri.hungcam.views', compact('treat'));
    }

    public function create_hcam()
    {
        return view('dieu-tri.hungcam.create');
    }

    public function store_hcam(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Treatment::create($input);
        return redirect(route('hungcam.views'));
    }

    public function details_hcam($id)
    {
        //==== Edit
        $model = Treatment::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('dieu-tri.hungcam.index', ['model' => $model]);
    }

    public function updated_hcam(Request $request, $id)
    {
        $model = Treatment::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('hungcam.views', ['model' => $model, 'input' => $input]));
    }
    //================ Hoảng loạn
    public function index_hloan()
    {
        $treat = Treatment::all();
        return view('dieu-tri.hoangloan.views', compact('treat'));
    }

    public function create_hloan()
    {
        return view('dieu-tri.hoangloan.create');
    }

    public function store_hloan(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Treatment::create($input);
        return redirect(route('hoangloan.views'));
    }

    public function details_hloan($id)
    {
        //==== Edit
        $model = Treatment::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('dieu-tri.hoangloan.index', ['model' => $model]);
    }

    public function updated_hloan(Request $request, $id)
    {
        $model = Treatment::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('hoangloan.views', ['model' => $model, 'input' => $input]));
    }
    //================ Động kinh
    public function index_dkinh()
    {
        $treat = Treatment::all();
        return view('dieu-tri.dongkinh.views', compact('treat'));
    }

    public function create_dkinh()
    {
        return view('dieu-tri.dongkinh.create');
    }

    public function store_dkinh(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Treatment::create($input);
        return redirect(route('dongkinh.views'));
    }

    public function details_dkinh($id)
    {
        //==== Edit
        $model = Treatment::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('dieu-tri.dongkinh.index', ['model' => $model]);
    }

    public function updated_dkinh(Request $request, $id)
    {
        $model = Treatment::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('dongkinh.views', ['model' => $model, 'input' => $input]));
    }
    //================ Ám ảnh
    public function index_amanh()
    {
        $treat = Treatment::all();
        return view('dieu-tri.amanh.views', compact('treat'));
    }

    public function create_amanh()
    {
        return view('dieu-tri.amanh.create');
    }

    public function store_amanh(Request $request)
    {
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        Treatment::create($input);
        return redirect(route('amanh.views'));
    }

    public function details_amanh($id)
    {
        //==== Edit
        $model = Treatment::find($id);
        $model['symptom'] = explode("value", $model['symptom']);
        return view('dieu-tri.amanh.index', ['model' => $model]);
    }

    public function updated_amanh(Request $request, $id)
    {
        $model = Treatment::find($id);
        $input = $request->all();
        $input['symptom'] = implode(", ", $input['symptom']);
        $model->update($input);
        return redirect(route('amanh.views', ['model' => $model, 'input' => $input]));
    }
}
