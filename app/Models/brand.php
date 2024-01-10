<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $fillable=['name_ar','name_en','image'];
    //cancel timestamp
    public $timstamp=false;
}
