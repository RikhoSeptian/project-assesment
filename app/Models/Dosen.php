<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matkul;


class Dosen extends Model
{
    use HasFactory;

     protected $table = 'dosen';

    protected $fillablel = [
        'name',
        'nip',
    ];

    public function matkul()
    {
        return $this->hasMany(Matkul::class);
    }
}
