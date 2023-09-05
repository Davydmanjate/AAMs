<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cases;
use App\Models\Custums;
use App\Models\Layer;
use PDF;

class CaseController extends Controller
{
    public function index(){
        $data = Cases::get();
        // return $data;
        $layer = Layer::all();
        $custum = Custums::all();
        return view('case.index',compact('data','layer', 'custum'));
    }
    public function addCase(){
        // return view('case.add');
        $custum= Custums::all();
        $layer = Layer::all();
        $data = Cases::get();
        return view('case.add', compact('data','layer', 'custum'));

    }

    public function saveCase(Request $request){
        $request->validate([
            'name' => 'required',
            'province' => 'required',
            'marital_status' => 'required',
            'age' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);


    $custum_id = $request->custum_id;
    $name = $request->name;
    $province = $request->province;
    $audience = $request->audience;
    $marital_status = $request->marital_status;
    $age = $request->age;
    $subject = $request->subject;
    $message = $request->message;

    
    $item = new Cases();
    $item->custum_id = $custum_id;
    $item->name = $name;
    $item->province = $province;
    $item->audience = $audience;
    $item->marital_status = $marital_status;
    $item->age = $age;
    $item->subject = $subject;
    $item->message = $message;
    $item->save();

    return redirect()->back()->with('success','Pedido enviao com sucesso');
    }

    public function editCase($id){
        $data = Cases::where('id','=',$id)->first();
        $custum= Custums::all();
        $layer = Layer::all();
        return view('case.edit',compact('data', 'layer', 'custum'));
    }

    public function updateCase(Request $request){
        $request->validate([
            'custum_id' => 'required',
            'name' => 'required',
            'province' => 'required',
            'marital_status' => 'required',
            'age' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $id = $request->id;
        $custum_id = $request->custum_id;
        $name = $request->name;
        $province = $request->province;
        $audience = $request->audience;
        $marital_status = $request->marital_status;
        $age = $request->age;
        $subject = $request->subject;
        $message = $request->message;

        Cases::where('id'.'=',$id)->update([
            'custum_id' => $custum_id,
            'name' => $name,
            'province' => $province,
            'audience' => $audience,
            'marital_status' => $marital_status,
            'age' => $age,
            'subject' => $subject,
            'message' => $message,
        ]);

        return redirect()->back()->with('success','Casos actualizado com sucesso');
    }

    public function generatePDF()
    {
        $case = Cases::get();
  
        $data = [
            'title' => 'Associação dos Advogados de Moçambique',
            'date' => date('m/d/Y'),
            'case' => $case
        ]; 
            
        $pdf = PDF::loadView('case.myPDF', $data);
     
        return $pdf->download('laraveltuts.pdf');
    }
}
 