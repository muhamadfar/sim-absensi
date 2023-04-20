<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rombel extends Model
{
    use HasFactory;
    protected $table = 'rombel';
    protected $fillable = ['nis', 'jurusan', 'rombel'];


     public function siswas()
    {
       return $this->hasMany(Siswa::class);
    }

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
