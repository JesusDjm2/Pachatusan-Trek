<?php

namespace App\Providers;

use App\Models\EsCategoria;
use App\Models\Estour;
use App\Models\TourCategory;
use Illuminate\Support\Facades\View;
use App\Models\Tour;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        // Obtener categorías
        $treksCategory = TourCategory::where('nombre', 'Treks')->first();
        $expeditionsCategory = TourCategory::where('nombre', 'Expeditions')->first();
        $toursCategory = TourCategory::where('nombre', 'Tours')->first();
        // Obtener categorías en español
        $treksEsCategory = EsCategoria::where('nombre', 'Caminatas')->first();
        $expeditionsEsCategory = EsCategoria::where('nombre', 'Expediciones')->first();
        $toursEsCategory = EsCategoria::where('nombre', 'Tours')->first();

        // Inicializar variables
        $treks = collect();
        $expeditions = collect();
        $toursEn = collect();
        // Inicializar variables en español
        $caminatas = collect();
        $expediciones = collect();
        $toursEs = collect();


        // Obtener tours para cada categoría si la categoría existe
        if ($treksCategory) {
            $treks = Tour::whereHas('categorias', function ($query) use ($treksCategory) {
                $query->where('tour_category.categoria_id', $treksCategory->id);
            })->get();
        }

        if ($expeditionsCategory) {
            $expeditions = Tour::whereHas('categorias', function ($query) use ($expeditionsCategory) {
                $query->where('tour_category.categoria_id', $expeditionsCategory->id);
            })->get();
        }

        if ($toursCategory) {
            $toursEn = Tour::whereHas('categorias', function ($query) use ($toursCategory) {
                $query->where('tour_category.categoria_id', $toursCategory->id);
            })->get();
        }

        // Obtener tours en español para cada categoría si la categoría existe
        if ($treksEsCategory) {
            $caminatas = Estour::whereHas('categorias', function ($query) use ($treksEsCategory) {
                $query->where('escategorias.id', $treksEsCategory->id); // Usar el campo correcto
            })->get();
        }

        if ($expeditionsEsCategory) {
            $expediciones = Estour::whereHas('categorias', function ($query) use ($expeditionsEsCategory) {
                $query->where('escategorias.id', $expeditionsEsCategory->id);
            })->get();
        }

        if ($toursEsCategory) {
            $toursEs = Estour::whereHas('categorias', function ($query) use ($toursEsCategory) {
                $query->where('escategorias.id', $toursEsCategory->id);
            })->get();
        }

        // Compartir datos con todas las vistas
        View::share('globalTreks', $treks);
        View::share('globalExpeditions', $expeditions);
        View::share('globalTours', $toursEn);

        // Compartir datos con todas las vistas (español)
        View::share('globalTreksEs', $caminatas);
        View::share('globalExpeditionsEs', $expediciones);
        View::share('globalToursEs', $toursEs);
    }
}
