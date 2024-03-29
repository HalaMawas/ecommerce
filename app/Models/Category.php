<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable=['name_ar','name_en','image','parent_id'];
    public $timestamps=false;

    public function Products(){
        return $this->hasMany('App\Models\Product');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id')->withDefault();
    }

    public function children(){
        return $this->hasMany('App\Models\Category','parent_id','id');
    }
}
