<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'description',
        'image',
        'price',
        'Category_id',
    ];


    public function subCategories(){

        return $this->belongsTo(' App\Models\SubCategories','SubCategories_id','id');

    }


}
