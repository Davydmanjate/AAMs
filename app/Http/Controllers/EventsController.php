<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use App\Models\Cases;
use App\Models\Layer;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        $data = Avance::get();
        $layer = Layer::all();
        $case = Cases::all();
        return view('avanco.index', compact('data','layer','case'));
    }

    public function edit(Avance $data, $id){
        $layer = Layer::all();
        $case = Cases::all();
        $data = Avance::findOrFail($id);
        return view('avanco.adicione', compact('data', 'layer', 'case'));
    }
    public function update(Request $request, Avance $data, $id){
        $data = Avance::findOrFail($id);
        $data->update($request->all());
        return redirect()->back()->with('success', 'Processo submetido com sucesso');
    }
}
