<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $lang = App::currentLocale();
        View::share('allCategories',
        Category::whereNotNull('parent_id')->withCount(['products'])
        ->select('name_'.$lang.' as name','image')->get()
    );
        Paginator::useBootstrapFive();
    }
}
