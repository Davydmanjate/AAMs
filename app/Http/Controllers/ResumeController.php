<?php

namespace App\Http\Controllers;
use App\Models\Cases;
use App\Models\Layer;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function caseByLayer(){
        $data = Resume::select('layer->name',DB::raw('SUM(cases.amount) as total_cases'))
        ->join('cases', 'layers.id', '=', 'case.layer-id')
        ->groupBy('layers.name')
        ->get();
        return view('case.case-by-layer', compact($data));
        // return $data;
        $layer = Layer::all();
        $case = Cases::all();
        // return view('layers.resume', compact('data','layer','case'));
    }
}
