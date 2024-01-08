<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prodi;


class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'name',
        'nim',
        'prodi_id'
    ];


    public function Prodis()
    {
        return $this->belongsTo(Prodi::class);
    }
}
