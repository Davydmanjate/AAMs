<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custums;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\view\view;
class CustumController extends Controller
{
    public function index(){
        $data = Custums::get();
        return view('custums.index', compact('data'));
    }

    public function addCustum() {
        $custum= Custums::all();
        return view('custums.add', compact('custum'));
    }
    public function saveCustum(Request $request) {
        $request->validate([
            'name' => 'required',
            'telefone' => 'required',
            'password' => 'required',
        ]);
        $name = $request->name;
        $email = $request->email;
        $telefone = $request->telefone;
        $password = Hash::make($request->password);

        $item = new Custums();
        $item->name = $name;
        $item->email = $email;
        $item->telefone = $telefone;
        $item->password = $password;
        $item->save();

        return redirect()->back()->with('success', 'Cliente adicionado com sucesso');
    }

    public function editCustum($id){
        $data = Custums::where('id','=', $id)->first();
        return view('custums.edit',compact('data'));
        // return $data;
    }
    public function updateCustum(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'password' => 'required',
        ]);
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $telefone = $request->telefone;
        $password = $request->password;

        Custums::where('id','=',$id)->update([
            'name' => $name,
            'email' => $email,
            'telefone' => $telefone,
            'password' => $password
        ]);
        return redirect()->back()->with('success', 'Cliente actualizado com sucesso');
    }
    public function deleteCustum($id){
        Custums::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Cliente apagado com sucesso');
    }
}
