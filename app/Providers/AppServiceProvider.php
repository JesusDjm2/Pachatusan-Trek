<?php

namespace App\Providers;

use App\Models\Categoria;
use App\Models\Subcategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        /* View::composer('*', function ($view) {
             $subcategoriasMenu = Subcategory::with('category')
                 ->whereHas('tours')
                 ->get();

             $view->with('subcategoriasMenu', $subcategoriasMenu);
         }); */
        /* View::composer('layouts.admin', function ($view) {
            $categorias = Categoria::with('subcategories')->get();
            $view->with('categorias', $categorias);
        }); */
    }

}
