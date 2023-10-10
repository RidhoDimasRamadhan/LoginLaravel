<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'identitas_mahasiswa';
    protected $orimaryKey = 'id';
}
