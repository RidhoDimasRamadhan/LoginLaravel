<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eskul;

class eskulController extends Controller
{
    public function index(){
        $eskul = eskul::all();
        return view('eskul',['eskulList'=>$eskul,'judul'=>'eskul']); 
    }

    public function eskulDetail($id){
        $eskulDetail = eskul::with('aw')->find($id);
        // dd($eskulDetail)->all();
        return view('Page_Detail/eskul-detail',['eskul_detail'=>$eskulDetail,'judul'=>'eskul']);
    }
}
