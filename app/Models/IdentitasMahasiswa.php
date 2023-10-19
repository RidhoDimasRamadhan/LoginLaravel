<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama','NPM','class_id','updated_at','created_at'];
    protected $table = 'identitas_mahasiswa';
    protected $primaryKey = 'id';
}
