<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //================= share-vars ==================== //
        $siteData['categories'] = Category::orderBy('id', 'DESC')->get();

        View::share('siteData', $siteData);
        //================= share-vars ==================== //

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
