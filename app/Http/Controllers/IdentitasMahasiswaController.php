<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\IdentitasMahasiswa;

class IdentitasMahasiswaController extends Controller
{
    public function Mahasiswa(){
        $db_identitasMahasiswa = identitasMahasiswa::all();
        // return view('identitas_Mahasiswa',['identitasMahasiswa_list'=>$db_identitasMahasiswa]);
        // $data = ["title" => "hello", "description" => "test"];
        // dd($data);
        // $nama = "ridho dimas ramadhan";
        
        // // jadi dalam pembuiatan nama pada 
        // // return view('identitas_Mahasiswa',['nama' => $nama]);
        return view('identitas_Mahasiswa',['identitasMahasiswa_list' => $db_identitasMahasiswa]);


    }
}
