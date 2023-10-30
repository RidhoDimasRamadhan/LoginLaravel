<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Identitas extends Model
{
    use HasFactory;
    protected $table = 'identitas_tabel';
 
    protected $primaryKey = 'id'; // jika untuk menambhakan primary key nya jika selain 'id', tidak usah untuk menambahkan protected, sedangkan jika primamryKey nya selain id bisa menggunakan primaryKey
    public function namanyabebas(): HasMany
    {
        return $this->hasMany(IdentitasMahasiswa::class,'class_id','id'); 
        // nah untuk penjelasan mengenai class_id dan id, untuk class_id ini diambil dari class_id dari tabel identitasMahasiswa dan id diambil dari id yang ada di tabel identitas
    }

   
}
