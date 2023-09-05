<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use App\Models\Cases;
use App\Models\Custums;
use App\Models\Layer;
use Illuminate\Http\Request;

class AvanceController extends Controller
{
    public function index(){
        $data = Avance::get();
        $layer = Layer::all();
        $custum = Custums::all();
        $case = Cases::all();
        return view('avanco.index', compact('data','layer','custum','case'));
    }

    public function addAvance() {
        $avance= Avance::all();
        $layer = Layer::all();
        $custum = Custums::all();
        $case = Cases::all();
        return view('avanco.add', compact('avance','layer','custum','case'));
    }

    public function saveAvance(Request $request) {
        $request->validate([
            'custum_id' => 'required',
            'case_id' => 'required',
            'case_id' => 'required',
            'layer_id' => 'required',
            'status' => 'required',
        ]);

        $custum_id = $request->custum_id;
        $case_id = $request->case_id;
        $case_id = $request->case_id;
        $layer_id = $request->layer_id;
        $status = $request->status;

        $item = new Avance();
        $item->custum_id = $custum_id;
        $item->case_id = $case_id;
        $item->case_id = $case_id;
        $item->layer_id = $layer_id;
        $item->status = $status;
        $item->save();

        return redirect()->back()->with('success', 'Processo submetido com sucesso');
}

public function edit(Avance $data, $id){
    $layer = Layer::all();
    $custum = Custums::all();
    $case = Cases::all();
    $data = Avance::findOrFail($id);
    return view('avanco/edit', compact('data', 'layer', 'custum', 'case'));
}
public function update(Request $request, Avance $data, $id){
    $data = Avance::findOrFail($id);
    $data->update($request->all());
    return redirect()->back()->with('success', 'Processo submetido com sucesso');
}

public function deleteAvance($id){
    Avance::where('id','=',$id)->delete();
    return redirect()->route('avanco.index')->with('success', 'Processo eliminado com sucesso');
}
}