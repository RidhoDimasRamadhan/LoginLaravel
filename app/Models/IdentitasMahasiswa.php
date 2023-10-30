<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class IdentitasMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama','NPM','class_id','updated_at','created_at'];
    protected $table = 'identitas_mahasiswa';
    protected $primaryKey = 'id';


    public function class(): BelongsTo
    {
        return $this->belongsTo(Identitas::class);
    }


    public function extraculicullar(): BelongsToMany
    {
        return $this->belongsToMany(eskul::class, 'pivot_table', 'student_id','id_eskul');
    }
}
