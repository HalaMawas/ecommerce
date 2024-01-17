<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class,'index'])->name('home');
Route::get('get-product/{category}', [MainController::class,'getProducts']);
Route::get('get-product', [MainController::class,'getallProducts']);


Route::resource('brand',BrandController::class);
Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);

Route::get('change-lang',function(){
    $locale = App::currentLocale();
 
    if ($locale=='ar') {
        app()->setLocale('en');
    }else{
        app()->setLocale('ar');   
     }
     $locale = App::currentLocale();
        session()->put('locale', $locale);
        return redirect()->back();
});