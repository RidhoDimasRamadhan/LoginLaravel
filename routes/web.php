<?php

use App\Http\Controllers\eskulController;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\IdentitasMahasiswaController;
use App\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[IdentitasMahasiswaController::class, 'Mahasiswa']);
Route::get('nama', function(){
    return 'RIDHODIMAS';
});

// Route::get("/login", function(){
//     return view('login');
// });

// Route::get('/identitas',function(){
//     return view('identitas');
// });
Route::controller(IdentitasController::class)->group(function(){
    Route::get('/identitas_tabel','identitasTabel');
    Route::get('Page_Detail/identitas-teacher-detail/{id}','identitasTabelDetail');

});

Route::controller(IdentitasMahasiswaController::class)->group(function(){
    Route::get('/identitas_Mahasiswa', 'Mahasiswa');
    Route::get('Page_Detail/identitas-mahasiswa-detail/{id}', 'mahasiswa_detail');
});

Route::controller(eskulController::class)->group(function(){
    Route::get('/eskul',[eskulController::class,'index']);
    Route::get('Page_Detail/eskul-detail/{id}',[eskulController::class,'eskulDetail']);

});

Route::get('/login',[loginController::class,'login']);