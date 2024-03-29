<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name_ar','name_en','description_ar','description_en'
    ,'image','price','category_id','brand_id'];

    public function brand(){
        return $this->belongsTo('App\Models\Brand', 'brand_id' , 'id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id' , 'id');
    }
}
