<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Identitas;
use Illuminate\Http\Request;
use App\Models\IdentitasMahasiswa;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Database\Seeders\identitasMahasiswa as SeedersIdentitasMahasiswa;

class IdentitasMahasiswaController extends Controller
{
    public function Mahasiswa(){
        // return view('identitas_Mahasiswa',['identitasMahasiswa_list'=>$db_identitasMahasiswa]);
        // $data = ["title" => "hello", "description" => "test"];
        // dd($data);
        // $nama = "ridho dimas ramadhan";
        
        // // jadi dalam pembuiatan nama pada 
        // return view('identitas_Mahasiswa',['nama' => $nama]);


        // $db_identitasMahasiswa = identitasMahasiswa::all();
        // return view('identitas_Mahasiswa',['identitasMahasiswa_list' => $db_identitasMahasiswa]);

        // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])

        // dengan cara menggunakan Query Builder (pokonya adalm pembuatan query builder ini harus mengunakan nama variaabel sedangkan untuk eloquent tidak harus menggunakan/membuat variabel)
        // INSERT DATA
            // $identitas_mahasiswa = DB::table('identitas_mahasiswa')->get();
            // $identitas_mahasiswa= DB::table('identitas_mahasiswa')->insert([
            //         "nama" => "kambing guling",
            //         "NPM" => "10120111",
            //         "class_id" => 1, 
            //     ]);
        
        // UPDATE DATA
            // $students = DB::table('identitas_mahasiswa')->where('id',39)->update(['nama'=>'Kambing Guling enak banget lohh']);
        
        //  Delete
            // $students = DB::table('identittas_mahasiswa)->where('id',3)->delete();
        
        // dengan cara menggunakan Eloquent
        // INSERT
            // $identitas_mahasiswa = IdentitasMahasiswa::all();
                // INSERT
                //  IdentitasMahasiswa::create([
                //     "nama" => "ayam guling",
                //     "NPM" => "10120111",
                //     "class_id" => 2,
                //     `updated_at` => Carbon::now(),
                //     `created_at`=> Carbon::now(),
                // ]);


        // UPDATE
                // IdentitasMahasiswa:: find(40)->update(['nama'=>'ayam guling enak banget lohh']);

        // DELETE
                // $studens  = identittasMahasiswa::find(29)>delete();


        // collections
                // $angka = [1,4,14,14,12,12,12,121];
                // $awbela = "";
                // if(in_array(10,$angka)){

                //     $awbela = "nilai true"; 
                //     dd($awbela);
                // }
                // else{
                //     $awbela = "nilai not true"; 
                //     dd($awbela);
                // }

                // contains (berfungsi untuk mencari nilai uang terkadnung dalam suatu array)

                // diff (jika diff ini ialah berguna berguna untuk mwmbandingak 2 buah array )

                // filter (berfungsi untuk menyaring yang ada didalam sebuah varray kita)

                // pluck (bergungsi untuk mencaari data di db)
                
                // map (berfungsi untuk looping atau perulanagan)

            // dd($angka);
            $identitasMahasiswa_list=identitasMahasiswa::all()->sortBy('nama');
            // $identitasMahasiswa_list = $asc::orderBy('nama')->get();

            // $identitasMahasiswa_list = identitasMahasiswa::with('Identitas')->get();
            return view('identitas_Mahasiswa',['studentList' => $identitasMahasiswa_list,'judul'=>'identitas_Mahasiswa']);

    }

    public function mahasiswa_detail($id){
            $mahasiswa_detail_list = IdentitasMahasiswa::with(['class','extraculicullar'])->find($id);
            // dd($mahasiswa_detail_list)->all();
            return view('Page_Detail/identitas-mahasiswa-detail',['mahasiswa_detail_list'=>$mahasiswa_detail_list,'judul'=>'identitas_Mahasiswa']);       
    }
}
