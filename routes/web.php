<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EnblogController;
use App\Http\Controllers\EnCatController;
use App\Http\Controllers\EnEnlacesController;
use App\Http\Controllers\EntagController;
use App\Http\Controllers\EsblogController;
use App\Http\Controllers\EsCatController;
use App\Http\Controllers\EstagController;
use App\Http\Controllers\EsTourController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('sitemap', 'SitemapController@sitemap');
Route::get('treks', [EnEnlacesController::class, 'treks'])->name('treks');
Route::get('expeditions', [EnEnlacesController::class, 'expeditions'])->name('expeditions');
Route::get('tours-in-peru', [EnEnlacesController::class, 'entours'])->name('entours');
Route::get('peru-tourism-blog', [EnEnlacesController::class, 'blog'])->name('blog-en');

Route::get('Cusco-Sacred-Valley', [EnEnlacesController::class, 'cusco'])->name('cusco');
Route::get('Inca-Trail-to-Machu-Picchu', [EnEnlacesController::class, 'inca'])->name('inca');
Route::get('North-and-south-of-Cusco', [EnEnlacesController::class, 'south'])->name('south');

Route::get('about', [EnEnlacesController::class, 'about'])->name('about');
Route::get('contact-Pachatusan-Trek', [EnEnlacesController::class, 'contact'])->name('contact');
Route::get('certificates', [EnEnlacesController::class, 'certificates'])->name('certificates');
Route::get('social-projects', [EnEnlacesController::class, 'social'])->name('social');
Route::get('search-tours', [EnEnlacesController::class, 'search'])->name('search');

/* Route::get('testimonials',  [EnEnlacesController::class, 'testimonials'])->name('testimonials');

Route::get('faqs',  [EnEnlacesController::class, 'faqs'])->name('faqs'); */

//Rutas Español
Route::get('turismo-Peru', [EnEnlacesController::class, 'inicio'])->name('inicio');
Route::get('Expediciones', [EnEnlacesController::class, 'expediciones'])->name('expediciones');
Route::get('Treks-Peru', [EnEnlacesController::class, 'trekses'])->name('trekses');
Route::get('Tours-Peru', [EnEnlacesController::class, 'tourses'])->name('tourses');

Route::get('Cusco-Valle-sagrado', [EnEnlacesController::class, 'valle'])->name('valle');
Route::get('Camino-Inca-a-Machu-Picchu', [EnEnlacesController::class, 'incaes'])->name('incaes');
Route::get('Norte-y-sur-del-Cusco', [EnEnlacesController::class, 'sur'])->name('sur');

Route::get('Nosotros', [EnEnlacesController::class, 'nosotros'])->name('nosotros');
Route::get('Certificados', [EnEnlacesController::class, 'certificados'])->name('certificados');
Route::get('Proyectos-Sociales', [EnEnlacesController::class, 'proyectos'])->name('proyectos');
Route::get('Contacto', [EnEnlacesController::class, 'contacto'])->name('contacto');
Route::get('buscar-tours', [EnEnlacesController::class, 'searches'])->name('searches');

Route::get('glamping-español', [EnEnlacesController::class, 'glamping'])->name('glamping');
Route::get('glamping-english', [EnEnlacesController::class, 'glampingen'])->name('glampingen');
Route::get('terminos-y-condiciones', [EnEnlacesController::class, 'terminos'])->name('terminos');
Route::get('terms-y-conditions', [EnEnlacesController::class, 'terms'])->name('terms');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class)->names('users');
    Route::resource('tours-en-ingles', TourController::class)->names('tours');
    Route::resource('categorias-en-ingles', EnCatController::class)->names('categories');

    //Subcategorias Inglés
    Route::resource('subcategorias-ingles', SubcategoriaController::class)->parameters(['subcategorias-ingles' => 'subcategoria'])->names('subcategories');
    //Subcategorias Español
    Route::resource('subcategorias-español', SubcategoryController::class)->parameters(['subcategorias-espanol' => 'subcategoria'])->names('subcategorias');

    Route::resource('tours-espanol', EsTourController::class)->names('estours');
    Route::resource('categorias-espanol', EsCatController::class)->names('categorias');
    Route::resource('entags', EntagController::class)->names('entags');
    Route::resource('blogs-en-ingles', EnblogController::class)->names('enblogs');
    Route::resource('estags', EstagController::class)->names('estags');
    Route::resource('esblogs', EsblogController::class)->names('esblogs');
    Route::resource('imagenes', ImagenController::class)->names('imagenes');
    Route::resource('admin/estours/pais', PaisController::class)->names('paises');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
//Mostrar Subcategorias sin Auth
Route::get('SubCategories-English/{slug}', [SubcategoriaController::class, 'show'])->name('subcategories.show');
//Mostrar Subcategorias sin Auth
Route::get('SubCategorias-Espanol/{slug}', [SubcategoryController::class, 'show'])->name('subcategorias.show');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('mostrar', [CategoriaController::class, 'mostrar'])->name('mostrar');
Route::get('/en/{slug}', [TourController::class, 'show'])->name('tour.show');
Route::get('/{slug}', [EsTourController::class, 'show'])->name('estour.show');
Route::get('category/{slug}', [EnCatController::class, 'show'])->name('category.show');
Route::get('categoria/{slug}', [EsCatController::class, 'show'])->name('categoria.show');
Route::get('en/blog/{slug}', [EnblogController::class, 'show'])->name('enblog.show');
Route::get('es/blog/{slug}', [EsblogController::class, 'show'])->name('esblog.show');
Route::get('en/tag/{slug}', [EntagController::class, 'show'])->name('entag.show');
Route::get('es/tag/{slug}', [EstagController::class, 'show'])->name('estag.show');

//Rutas en Ingles
/* Route::get('/', function () {return view('index');})->name('index'); */
Route::get('/', [EnEnlacesController::class, 'index'])->name('index');

//Formularios en inglés
Route::post('mensaje01', function () {
    $datos = request()->all();
    // Validación del CAPTCHA en el backend
    if ((int) request('respuesta') !== (int) request('valorCorrecto')) {
        abort(400, 'Invalid request.');
    }
    Mail::send("emails.mensaje1", $datos, function ($message) use ($datos) {
        $message->from($datos['email'], $datos['name'])
            ->to('mirandadjmdjm@gmail.com', 'Pachatusan Trek')
            ->subject('Envio de formulario desde la página web.');
    });
    return back()->with('flash', [
        'type' => 'success', // Tipo de alerta: success, danger, warning, info
        'message' => 'Your message was sent successfully!'
    ]);
})->name('mensaje01');

Route::post('mensaje02', function () {
    $datos = request()->all();
    // Validación del CAPTCHA en el backend
    if ((int) request('respuesta') !== (int) request('valorCorrecto')) {
        abort(400, 'Invalid request.');
    }
    Mail::send("emails.mensaje1", $datos, function ($message) use ($datos) {
        $message->from($datos['email'], $datos['name'])
            ->to('mirandadjmdjm@gmail.com', 'DJM2')
            ->subject('Envio de contacto desde página web.');
    });
    return back()->with('flash', [
        'type' => 'success',
        'message' => 'Su mensaje fué enviado con éxito!'
    ]);
})->name('mensaje02');

Route::post('bookindex2', function () {
    $datos = request()->all();
    if (!empty(request('honeypot'))) {
        return back()->withErrors(['honeypot' => 'Spam detected.']);
    }

    if ((int) request('respuesta') !== session('captcha_sum')) {
        return back()->withErrors(['captcha' => 'Invalid CAPTCHA. Please try again.'])->withInput();
    }
    Mail::send("emails.bookindex2", $datos, function ($emailMessage) use ($datos) {
        $emailMessage->from($datos['email'], $datos['name'])
            ->to('mirandadjmdjm@gmail.com', 'DJM2')
            ->subject('Envio de contacto desde página web.');
    });
    return back()->with('flash', [
        'type' => 'success',
        'message' => 'Your message was sent successfully!',
    ]);
})->name('bookindex2');

Route::post('bookes', function () {
    $datos = request()->all();
    if (!empty(request('honeypot'))) {
        return back()->withErrors(['honeypot' => 'Spam detected.']);
    }
    if ((int) request('respuesta') !== session('captcha_sum')) {
        return back()->withErrors(['captcha' => 'CAPTCHA inválido. Intente nuevamente.'])->withInput();
    }
    Mail::send("emails.bookindex2", $datos, function ($emailMessage) use ($datos) {
        $emailMessage->from($datos['email'], $datos['name'])
            ->to('mirandadjmdjm@gmail.com', 'DJM2')
            ->subject('Envio de contacto desde página web.');
    });
    return back()->with('flash', [
        'type' => 'success',
        'message' => 'Su mensaje fué enviado con éxito!',
    ]);
})->name('bookes');



Route::get('/{sendTitulo}/{prueba2}', function ($titulo = null, $pruebaVariable = null) {
    return view('emails.reserva', compact('titulo', 'pruebaVariable'));
})->name('reserva');
