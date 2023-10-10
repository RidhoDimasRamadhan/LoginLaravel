<?php

use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\IdentitasMahasiswaController;

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

Route::get('nama', function(){
    return 'RIDHODIMAS';
});

Route::get("/login", function(){
    return view('login');
});

// Route::get('/identitas',function(){
//     return view('identitas');
// });

Route::get('/identitas_tabel',[IdentitasController::class, 'identitasTabel']);
Route::get('/identitas_Mahasiswa',[IdentitasMahasiswaController::class, 'Mahasiswa']);