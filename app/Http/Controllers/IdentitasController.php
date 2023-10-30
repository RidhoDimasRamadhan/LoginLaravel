<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;
use App\Models\IdentitasMahasiswa;
use App\Http\Controllers\Controller;

class IdentitasController extends Controller
{
    public function identitasTabel()
    {
        $identitas = Identitas::all();
        return view('identitas',["identitas_list" => $identitas,"judul"=>"identitas_tabel"]);
    }

    public function identitasTabelDetail($id){
        $teacher_detail = identitas::with('namanyabebas')->find($id);
        // dd($teacher_detail);
        return view('Page_Detail/identitas-teacher-detail',['detail_teacher'=>$teacher_detail,'judul'=>'identitas_tabel']);
    }
}
