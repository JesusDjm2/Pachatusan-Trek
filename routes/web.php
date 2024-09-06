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
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


Route::get('sitemap', 'SitemapController@sitemap');
Route::get('around-peru', [EnEnlacesController::class, 'around'])->name('around');
Route::get('exclusive-tours', [EnEnlacesController::class, 'experiences'])->name('experiences');
Route::get('adventures', [EnEnlacesController::class, 'adventures'])->name('adventures');
Route::get('peru-tourism-blog', [EnEnlacesController::class, 'blog'])->name('blog-en');
Route::get('about',  [EnEnlacesController::class, 'about'])->name('about');
Route::get('testimonials',  [EnEnlacesController::class, 'testimonials'])->name('testimonials');
Route::get('terms-conditions-aet', [EnEnlacesController::class, 'terms'])->name('terms');
Route::get('faqs',  [EnEnlacesController::class, 'faqs'])->name('faqs');


Route::get('cusco-5-days-4-nights', function () {
    return view('cusco-5-days-4-nights');
})->name('cusco-5-days');
Route::get('cusco-6-days-5-nights', function () {
    return view('cusco-6-days-5-nights');
})->name('cusco-6-days');
Route::get('machupicchu-accelerate', function () {
    return view('machupicchu-accelerate');
})->name('machupicchu-accelerate');
Route::get('huacachina-ica-peru', function () {
    return view('huacachina-ica-peru');
})->name('huacachina-ica');
Route::get('arequipa-3-days', function () {
    return view('arequipa-3-days');
})->name('arequipa-4-days');
Route::get('Sacred_Valley', function () {
    return view('Sacred_Valley');
});
Route::get('Hiram_bingham', function () {
    return view('Hiram_bingham');
})->name('hiram-bingham-en');
Route::get('urubamba-market', function () {
    return view('urubamba-market');
});
Route::get('biking', function () {
    return view('biking');
})->name('biking');
Route::get('puno-3-days-tour', function () {
    return view('puno-3-days-tour');
});
Route::get('lima-3-days-tour', function () {
    return view('lima-3-days-tour');
})->name('lima-3-days-tour');
Route::get('puerto-maldonado', function () {
    return view('puerto-maldonado');
});

Route::get('peru-5-days-4-nights', function () {
    return view('peru-5-days-4-nights');
})->name('peru-5-days');
Route::get('peru-6-days-5-nights', function () {
    return view('peru-6-days-5-nights');
})->name('peru-6-days');
Route::get('peru-7-days-6-nights', function () {
    return view('peru-7-days-6-nights');
});
Route::get('peru-8-days-7-nights', function () {
    return view('peru-8-days-7-nights');
})->name('peru-8-days');
Route::get('peru-9-days-8-nights', function () {
    return view('peru-9-days-8-nights');
});
Route::get('peru-10-days-9-nights', function () {
    return view('peru-10-days-9-nights');
})->name('peru-10-days');
Route::get('peru-12-days', function () {
    return view('peru-12-days');
});
Route::get('peru-13-days', function () {
    return view('peru-13-days');
});
Route::get('peru-15-days-tour', function () {
    return view('peru-15-days-tour');
});
Route::get('peru-18-days-tour', function () {
    return view('peru-18-days-tour');
});
Route::get('peru-20-days-tour', function () {
    return view('peru-20-days-tour');
});
Route::get('peru-22-days', function () {
    return view('peru-22-days');
});

//blog
/* Route::get('blog/pachamama-ceremony', function () {
    return view('blog/pachamama-ceremony');
})->name('pachamama-ceremony');
Route::get('blog/virgin-of-carmen', function () {
    return view('blog/virgin-of-carmen');
})->name('virgin-of-carmen');
Route::get('blog/picnic', function () {
    return view('blog/picnic');
})->name('picnic-en');
Route::get('blog/nazca-lines-peru', function () {
    return view('blog/nazca-lines-peru');
})->name('nazca-lines-peru');
Route::get('blog/corpus-christi-cusco', function () {
    return view('blog/corpus-christi-cusco');
})->name('corpus-en');
Route::get('blog/pacaya-samiria', function () {
    return view('blog/pacaya-samiria');
})->name('pacaya-samiria');
Route::get('blog/places-to-visit-in-cusco', function () {
    return view('blog/places-to-visit-in-cusco');
})->name('places-cusco');
Route::get('blog/inti-raymi', function () {
    return view('blog/inti-raymi');
})->name('inti-raymi');
Route::get('blog/Ausangate-mountain-snowy', function () {
    return view('blog/Ausangate-mountain-snowy');
})->name('snowy-ausangate');
Route::get('blog/easter-in-cusco', function () {
    return view('blog/easter-in-cusco');
})->name('easter-in-cusco');
Route::get('blog/lima-city-of-the-kings', function () {
    return view('blog/lima-city-of-the-kings');
})->name('lima-city-of-the-kings');
Route::get('blog/en/peruvian-gastronomy', function () {
    return view('blog/en/peruvian-gastronomy');
})->name('peruvian-gastronomy');
Route::get('blog/en/how-to-travel-to-peru', function () {
    return view('blog/en/how-to-travel-to-peru');
})->name('how-to-travel-to-peru');
Route::get('blog/en/ollantaytambo-fortress', function () {
    return view('blog/en/ollantaytambo-fortress');
})->name('ollantaytambo-fortress'); */

//Adventures English
Route::get('adventures/choquequirao-tour', function () {
    return view('adventures/choquequirao-tour');
});
Route::get('adventures/atv-tour', function () {
    return view('adventures/atv-tour');
})->name('atv-tour');
Route::get('adventures/rafting-tour', function () {
    return view('adventures/rafting-tour');
})->name('rafting-tour');
Route::get('adventures/sandboarding-peru', function () {
    return view('adventures/sandboarding-peru');
});
Route::get('adventures/islands-palomino-tour', function () {
    return view('adventures/islands-palomino-tour');
});
Route::get('adventures/humantay-lake', function () {
    return view('adventures/humantay-lake');
});
Route::get('adventures/rainbow-mountain', function () {
    return view('adventures/rainbow-mountain');
});


//Rutas Español
Route::get('turismo-Peru', [EnEnlacesController::class, 'esIndex'])->name('inicio');
Route::get('tours-exclusivos', [EnEnlacesController::class, 'experiencias'])->name('experiencias');
Route::get('alrededor-de-peru', [EnEnlacesController::class, 'alrededor'])->name('alrededor-de-peru');
Route::get('tours-de-aventura', [EnEnlacesController::class, 'caminatas'])->name('caminatas');
Route::get('blog-turismo-peru', [EnEnlacesController::class, 'bloges'])->name('blog-es');
Route::get('preguntas-frecuentes', [EnEnlacesController::class, 'preguntas'])->name('preguntas-frecuentes');
Route::get('nosotros', [EnEnlacesController::class, 'nosotros'])->name('nosotros');
Route::get('testimonios', [EnEnlacesController::class, 'testimonios'])->name('testimonios');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class)->names('users');
    Route::resource('tours-en-ingles', TourController::class)->names('tours');
    Route::resource('categorias-en-ingles', EnCatController::class)->names('categories');
    Route::resource('tours-espanol', EsTourController::class)->names('estours');
    Route::resource('categorias-espanol', EsCatController::class)->names('categorias');
    Route::resource('entags', EntagController::class)->names('entags');
    Route::resource('blogs-en-ingles', EnblogController::class)->names('enblogs');
    Route::resource('estags', EstagController::class)->names('estags');
    Route::resource('esblogs', EsblogController::class)->names('esblogs');
    Route::resource('imagenes', ImagenController::class)->names('imagenes');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

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
    Mail::send("emails.mensaje1", $datos, function ($message) use ($datos) {
        $message->from($datos['email'], $datos['name'])
            ->to('routes@andeanexclusive.com', 'DJM2')
            ->subject('Envio de formulario desde la página web.');
    });
    return back()->with('flash', 'Your message was sent successfully!');
})->name('mensaje01');


Route::post('bookindex', function () {
    $datos = request()->all();
    Mail::send("emails.bookindex", $datos, function ($message) use ($datos) {
        $message->from($datos['email'])
            ->to('routes@andeanexclusive.com', 'DJM2')
            ->subject('Envio de formulario desde la página web.');
    });
    return back()->with('flash', 'Your message was sent successfully!');
})->name('bookindex');

Route::post('bookindex2', function () {
    $datos = request()->all();
    if (!empty($datos['personas'])) {
        return back()->with('error', 'Error: Invalid form submission');
    }

    Mail::send("emails.bookindex2", $datos, function ($message) use ($datos) {
        $message->from($datos['email'])
            ->to('routes@andeanexclusive.com', 'DJM2')
            ->subject('Envio de contacto desde página web.');
    });
    return back()->with('flash', 'Your message was sent successfully!');
})->name('bookindex2');

Route::post('mensaje02', function () {
    $datos = request()->all();
    Mail::send("emails.mensaje1", $datos, function ($message) use ($datos) {
        $message->from($datos['email'], $datos['name'])
            ->to('routes@andeanexclusive.com', 'DJM2')
            ->subject('Envio de contacto desde página web.');
    });
    return back()->with('flash', '¡Su mensaje fué enviado con éxito! Le responderemos en la mayor brevedad posible.');
})->name('mensaje02');

Route::post('book-castellano', function () {
    $datos = request()->all();
    Mail::send("emails.bookindex", $datos, function ($message) use ($datos) {
        $message->from($datos['email'])
            ->to('routes@andeanexclusive.com', 'DJM2')
            ->subject('Envio de contacto desde página web.');
    });
    return back()->with('flash', '¡Su mensaje fué enviado con éxito! Le responderemos en la mayor brevedad posible.');
})->name('book-castellano');

Route::post('bookindex2castellano', function () {
    $datos = request()->all();
    Mail::send("emails.bookindex2", $datos, function ($message) use ($datos) {
        $message->from($datos['email'])
            ->to('routes@andeanexclusive.com', 'DJM2')
            ->subject('Envio de contacto desde página web.');
    });
    return back()->with('flash', '¡Su mensaje fué enviado con éxito!');
})->name('bookindex2castellano');





//Aventuras Español
Route::get('adventures/tour-choquequirao', function () {
    return view('adventures/tour-choquequirao');
});
Route::get('adventures/tour-atv', function () {
    return view('adventures/tour-atv');
})->name('tour-atv');
Route::get('adventures/tour-rafting', function () {
    return view('adventures/tour-rafting');
})->name('tour-rafting');
Route::get('adventures/tour-islas-palomino', function () {
    return view('adventures/tour-islas-palomino');
});
Route::get('adventures/tour-laguna-humantay', function () {
    return view('adventures/tour-laguna-humantay');
});
Route::get('adventures/vinicunca-tour', function () {
    return view('adventures/vinicunca-tour');
});




Route::get('machupicchu-acelerado', function () {
    return view('machupicchu-acelerado');
})->name('machupicchu-acelerado');
Route::get('cusco-4-dias-3-noches', function () {
    return view('cusco-4-dias-3-noches');
})->name('cusco-4-dias');
Route::get('cusco-5-dias-4-noches', function () {
    return view('cusco-5-dias-4-noches');
})->name('cusco-5-dias');
Route::get('cusco-6-dias-5-noches', function () {
    return view('cusco-6-dias-5-noches');
})->name('cusco-6-dias');
Route::get('hiram-bingham', function () {
    return view('hiram-bingham');
})->name('hiram-bingham-es');
Route::get('mercado-urubamba', function () {
    return view('mercado-urubamba');
});
Route::get('ciclismo', function () {
    return view('ciclismo');
})->name('ciclismo');
Route::get('arequipa-3-dias', function () {
    return view('arequipa-3-dias');
})->name('arequipa-3-dias');
Route::get('valle-sagrado', function () {
    return view('valle-sagrado');
});
Route::get('puerto-maldonado-castellano', function () {
    return view('puerto-maldonado-castellano');
});
Route::get('puno-3-dias-tour', function () {
    return view('puno-3-dias-tour');
});
Route::get('lima-tour-3-dias', function () {
    return view('lima-tour-3-dias');
})->name('lima-tour-3-dias');
Route::get('huacachina-ica-peru-castellano', function () {
    return view('huacachina-ica-peru-castellano');
})->name('huacachina-ica-peru');

Route::get('peru-5-dias-4-noches', function () {
    return view('peru-5-dias-4-noches');
})->name('peru-5-dias');
Route::get('peru-6-dias-5-noches', function () {
    return view('peru-6-dias-5-noches');
})->name('peru-6-dias');
Route::get('peru-7-dias-6-noches', function () {
    return view('peru-7-dias-6-noches');
})->name('peru-7-dias');
Route::get('peru-8-dias-7-noches', function () {
    return view('peru-8-dias-7-noches');
})->name('peru-8-dias');
Route::get('peru-9-dias-8-noches', function () {
    return view('peru-9-dias-8-noches');
})->name('peru-9-dias');
Route::get('peru-10-dias-9-noches', function () {
    return view('peru-10-dias-9-noches');
})->name('peru-por-10-dias');
Route::get('peru-12-dias', function () {
    return view('peru-12-dias');
});
Route::get('peru-13-dias', function () {
    return view('peru-13-dias');
});
Route::get('peru-15-dias', function () {
    return view('peru-15-dias');
})->name('peru-15-dias');
Route::get('peru-18-dias-tour', function () {
    return view('peru-18-dias-tour');
});
Route::get('peru-20-dias-tour', function () {
    return view('peru-20-dias-tour');
});
Route::get('peru-22-dias-tour', function () {
    return view('peru-22-dias-tour');
});



//Blog español
Route::get('blog/dia-de-la-pachamama', function () {
    return view('blog/dia-de-la-pachamama');
})->name('dia-de-la-pachamama');
Route::get('blog/virgen-del-carmen', function () {
    return view('blog/virgen-del-carmen');
})->name('virgen-del-carmen');
Route::get('blog/picnic-castellano', function () {
    return view('blog/picnic-castellano');
})->name('picnic-castellano');
Route::get('blog/lineas-de-nazca', function () {
    return view('blog/lineas-de-nazca');
})->name('lineas-de-nazca');
Route::get('blog/corpus-christi-cusco-castellano', function () {
    return view('blog/corpus-christi-cusco-castellano');
})->name('corpus-christi-castellano');
Route::get('blog/pacaya-samiria-castellano', function () {
    return view('blog/pacaya-samiria-castellano');
})->name('pacaya-samiria-castellano');
Route::get('blog/lugares-que-visitar-en-cusco', function () {
    return view('blog/lugares-que-visitar-en-cusco');
})->name('lugares-para-visitar-cusco');
Route::get('blog/inti-raymi-castellano', function () {
    return view('blog/inti-raymi-castellano');
})->name('inti-raymi-castellano');
Route::get('blog/apu-ausangate-nevado', function () {
    return view('blog/apu-ausangate-nevado');
})->name('nevado-ausangate');
Route::get('blog/conoce-la-semana-santa-en-cusco', function () {
    return view('blog/conoce-la-semana-santa-en-cusco');
})->name('semana-santa');
Route::get('blog/lima-ciudad-de-reyes', function () {
    return view('blog/lima-ciudad-de-reyes');
})->name('lima-ciudad-de-reyes');
Route::get('blog/es/gastronomia-peruana', function () {
    return view('blog/es/gastronomia-peruana');
})->name('gastronomia-peruana');
Route::get('blog/es/como-viajar-a-peru', function () {
    return view('blog/es/como-viajar-a-peru');
})->name('como-viajar-a-peru');
Route::get('blog/es/fortaleza-de-ollantaytambo-cusco', function () {
    return view('blog/es/fortaleza-de-ollantaytambo-cusco');
})->name('fortaleza-ollantaytambo');


Route::get('/{sendTitulo}/{prueba2}', function ($titulo = null, $pruebaVariable = null) {
    return view('emails.reserva', compact('titulo', 'pruebaVariable'));
})->name('reserva');
