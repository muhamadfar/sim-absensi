<?php

namespace App\Models;

use App\Models\Rombel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = ['nis', 'nama', 'rombel', 'rayon', 'jk' ];

    public function rombels()
    {
        return $this->belongsTo(Rombel::class);
    }

}

