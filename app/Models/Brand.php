<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable=['name_ar','name_en','image'];
    public $timestamps=false;

    public function Products(){
        return $this->hasMany('App\Models\Product');
    }
}
