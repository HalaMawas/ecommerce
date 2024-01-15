<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
class MainController extends Controller
{
    public function index(){
        $categories=Category::whereNotNull('parent_id')->withCount(['products'])->get();
        $brands=Brand::all();
        return view("frontend.index",compact("categories",'brands'));
    }
}
