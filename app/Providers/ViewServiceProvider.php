<?php

namespace App\Providers;

use App\Models\Categoria;
use App\Models\EsCategoria;
use App\Models\Estour;
use App\Models\Pais;
use App\Models\TourCategory;
use Illuminate\Support\Facades\View;
use App\Models\Tour;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
    function normalizeUrl($url)
    {
        return mb_strtolower(trim($url), 'UTF-8');
    }

    public function boot()
    {
        // Slug maps
        $slugMapEnToEs = [
            'SubCategories-English/cusco-sacred-valley-of-the-incas' => 'SubCategorias-Espanol/cusco-y-valle-sagrado',
            'SubCategories-English/inca-trail-to-machu-picchu' => 'SubCategorias-Espanol/camino-inca-a-machu-picchu',
            'SubCategories-English/north-and-south' => 'SubCategorias-Espanol/norte-y-sur',
            'category/Treks' => 'categoria/Caminatas',
            'category/Expeditions' => 'categoria/Expediciones',
            'category/Tours' => 'categoria/Tours',
        ];
        $slugMapEsToEn = [];
        foreach ($slugMapEnToEs as $en => $es) {
            $slugMapEsToEn[strtolower($es)] = $en;
        }

        // Route maps
        $routeMapEnToEs = [
            'index' => 'inicio',
            'about' => 'nosotros',
            'contact' => 'contacto',
            'certificates' => 'certificados',
            'social' => 'proyectos',
            'treks' => 'trekses',
            'expeditions' => 'expediciones',
            'cusco' => 'valle',
            'inca' => 'incaes',
            'south' => 'sur',
        ];
        $routeMapEsToEn = array_flip($routeMapEnToEs);

        // Inglés → Español
        View::composer('layouts.admin', function ($view) use ($routeMapEnToEs, $slugMapEnToEs) {
            /*  $categoriasConSubcategorias = Categoria::with('subcategories')
                 ->orderByRaw("FIELD(id, 3, 1, 2)")
                 ->get(); */
            $categoriasConSubcategorias = Categoria::with([
                'subcategories',
                'tours' => function ($q) {
                    $q->orderBy('dias', 'asc');
                }
            ])
                ->orderByRaw("FIELD(id, 3, 1, 2)")
                ->get();

            $currentUrl = request()->path();
            $currentRoute = Route::currentRouteName();
            $params = request()->route()?->parameters() ?? [];

            $translatedSlug = $slugMapEnToEs[$currentUrl] ?? null;

            $targetRoute = $translatedSlug
                ? url($translatedSlug)
                : (isset($routeMapEnToEs[$currentRoute])
                    ? route($routeMapEnToEs[$currentRoute], $params)
                    : route('inicio'));

            $view->with([
                'categoriasConSubcategorias' => $categoriasConSubcategorias,
                'routeToOtherLang' => $targetRoute,
            ]);
        });

        // Español → Inglés
       
        View::composer('layouts.admines', function ($view) use ($routeMapEsToEn, $slugMapEsToEn) {
            $categoriasConSubcategorias = EsCategoria::with([
                'subcategorias',
                'tours' => function ($q) {
                    $q->orderBy('dias', 'asc');
                }
            ])->get();

            $paisesConTours = Pais::with([
                'estours' => fn ($q) => $q->orderBy('dias', 'asc')])->has('estours')->get();

            $normalizedUrl = strtolower(request()->path());
            $currentRoute = Route::currentRouteName();
            $params = request()->route()?->parameters() ?? [];

            $translatedSlug = $slugMapEsToEn[$normalizedUrl] ?? null;

            $targetRoute = $translatedSlug
                ? url($translatedSlug)
                : (isset($routeMapEsToEn[$currentRoute])
                    ? route($routeMapEsToEn[$currentRoute], $params)
                    : route('index'));

            $view->with([
                'categoriasConSubcategorias' => $categoriasConSubcategorias,
                'paisesConTours' => $paisesConTours,
                'routeToOtherLang' => $targetRoute,
            ]);
        });

        // Compartir Tours globales
        $mapTourData = fn($model, $nameField, $relationTable, $catTableField) => $model::where('nombre', $nameField)->first()
            ? Tour::whereHas('categorias', fn($q) => $q->where("tour_category.categoria_id", $model::where('nombre', $nameField)->first()->id))->get()
            : collect();

        $mapEsTourData = fn($model, $nameField, $relationTable, $catTableField) => $model::where('nombre', $nameField)->first()
            ? Estour::whereHas('categorias', fn($q) => $q->where("escategorias.id", $model::where('nombre', $nameField)->first()->id))->get()
            : collect();

        View::share('globalTreks', $mapTourData(TourCategory::class, 'Treks', 'tour_category', 'categoria_id'));
        View::share('globalExpeditions', $mapTourData(TourCategory::class, 'Expeditions', 'tour_category', 'categoria_id'));
        View::share('globalTours', $mapTourData(TourCategory::class, 'Tours', 'tour_category', 'categoria_id'));

        View::share('globalTreksEs', $mapEsTourData(EsCategoria::class, 'Caminatas', 'escategorias', 'id'));
        View::share('globalExpeditionsEs', $mapEsTourData(EsCategoria::class, 'Expediciones', 'escategorias', 'id'));
        View::share('globalToursEs', $mapEsTourData(EsCategoria::class, 'Tours', 'escategorias', 'id'));
    }

}
