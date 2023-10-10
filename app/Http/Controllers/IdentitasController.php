<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;

class IdentitasController extends Controller
{
    public function identitasTabel()
    {
        $identitas = Identitas::all();
        return view('identitas',["identitas_list" => $identitas]);
    }
}
