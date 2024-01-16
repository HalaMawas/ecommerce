<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
class MainController extends Controller
{
    public function index(){
        $categories=Category::whereNotNull('parent_id')->withCount(['products'])->get();
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
