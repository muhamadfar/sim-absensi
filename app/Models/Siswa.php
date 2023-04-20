<?php

namespace App\Models;

use App\Models\Rombel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = ['nis', 'nama', 'rombel_id', 'rayon_id', 'jk' ];

    public function rombel()
    {
        return $this->belongsTo(Rombel::class);
    }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }
}

