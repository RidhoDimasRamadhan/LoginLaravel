<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Identitas;
use App\Models\IdentitasMahasiswa;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\eskulController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class eskul extends Model
{
    use HasFactory;
    protected $table = "eskul";
    protected $primaryKey = 'id';

    public function aw(): BelongsToMany
    {
        return $this->belongsToMany(IdentitasMahasiswa::class, 'pivot_table','id_eskul', 'student_id');
    }
    
}
