<?php

namespace App\Models;

// use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';

    protected $fillablel = [
        'name',
        'status',
    ];

    // public function products()
    // {
    //     return $this->hasMany(Product::class, 'category_id', 'id');
    // }

    // public function brands()
    // {
    //     return $this->hasMany(Brand::class, 'category_id', 'id')->where('status','0');
    // }
}
