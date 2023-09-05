<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layer;
use PDF;

class LayerController extends Controller
{
    public function index(){
        $data = Layer::get();
        // return $data;
        return view('layers.index',compact('data'));
    }
    public function addLayer(){
        $layer= Layer::all();
        return view('layers.add', compact('layer'));
    }
    public function saveLayer(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'category' => 'required',
            'address' => 'required',
        ]);
        
        $name = $request->name;
        $email = $request->email;
        $telefone = $request->telefone;
        $category = $request->category;
        $address = $request->address;

        $item = new Layer();
        $item->name = $name;
        $item->email = $email;
        $item->telefone = $telefone;
        $item->category = $category;
        $item->address = $address;
        $item->save();

        return redirect()->back()->with('success', 'Advogado adicionado com sucesso');
}
public function editLayer($id){
            $data = Layer::where('id','=', $id)->first();
        return view('layers.edit',compact('data'));
}
public function updateLayer(Request $request){
            $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'category' => 'required',
            'address' => 'required',
            ]);

        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $telefone = $request->telefone;
        $category = $request->category;
        $address = $request->address;

        Layer::where('id','=',$id)->update([
            'name' => $name,
            'email' => $email,
            'telefone' => $telefone,
            'category' => $category,
            'address' => $address
        ]);
        return redirect()->back()->with('success', 'Advogado actualizado com sucesso');
    }
    public function deleteLayer($id){
                Layer::where('id','=',$id)->delete();
                return redirect()->back()->with('success', 'Advogado apagado com sucesso');
            }

            public function generatePDF()
    {
        $layer = Layer::get();
  
        $data = [
            'title' => 'Página dos Advogados de Moçambique',
            'date' => date('m/d/Y'),
            'layer' => $layer
        ]; 
            
        $pdf = PDF::loadView('layers.myPDF', $data);
     
        return $pdf->download('laraveltuts.pdf');
    }
 }