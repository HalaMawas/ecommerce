<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index(){
        $lang = App::currentLocale();
        $categories=Category::whereNotNull('parent_id')->withCount(['products'])
        ->select('name_'.$lang.' as name','image')->get();
        $brands=Brand::all();
        return view("frontend.index",compact("categories",'brands'));
    }
    public function getProducts($id,Request $request){
        
        $products=Product::where('category_id',$id);
        
        if($request->search){
            $products=$products->where('name_en','LIKE','%'.$request->search.'%');
        }

        $products=$products->get();
        return view('frontend.products',compact('products'));
    }
    public function getallProducts(Request $request){
        
        if($request->search){
            $products=Product::where('name_en','LIKE','%'.$request->search.'%')->paginate(3);
        }else{
            $products=Product::paginate(3);


        }

        return view('frontend.products',compact('products'));
    }
}
