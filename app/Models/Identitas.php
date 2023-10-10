<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;
    protected $table = 'identitas_tabel';
 
    protected $primaryKey = 'id'; // jika untuk menambhakan primary key nya jika selain 'id', tidak usah untuk menambahkan protected, sedangkan jika primamryKey nya selain id bisa menggunakan primaryKey
    
}
