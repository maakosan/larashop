<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Viewファサード追加

use App\Cate1;
use App\Product;

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
        // これを追加(seederの後で)
        View::share('cates', Cate1::all());
        View::share('pickups',Product::where('pickup', 1)->get());

    }
}
