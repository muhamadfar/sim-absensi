<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapels';
    protected $fillable = ['nama', 'jk', 'hari_id', 'jam', 'mapel', 'rombel_id'];

    public function rombel()
    {
        return $this->belongsTo(Rombel::class);
    }
}
