<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;

    protected $table = 'rayon';
    protected $fillable = ['rayon', 'pembimbing', 'ruangan'];

    public function siswas()
    {
       return $this->hasMany(Siswa::class); 
    }
}
