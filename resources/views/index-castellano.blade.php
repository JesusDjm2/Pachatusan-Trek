@extends('layouts.general-es')
@section('metas')
    <title>Agencia de Viajes para conocer Perú 2022 ✅ --> "Andean Exclusive Tours - Exclusiva Agencia de Viajes"</title>
    <meta name="keywords"
        content="Cusco tours, Cusco de Lujo, Agencia de Viajes Perú, Peru viajes, Tours en Perú, Tours en Cusco, Agencia de Viajes Cusco, Agencia de lujo, Tours exclusivos." />
    <meta name="Description"
        content="Una agencia de viajes de lujo en Cusco - Perú. ✅ Disfrute de la magia de de esta increible tierra.">
    <meta property="og:url" content="https://www.andeanexclusive.com/index-castellano" />
    <meta property="og:title" content="Tours en Perú - Cusco - Lima - Puerto Maldonado">
    <meta property="og:type" content="webside">
    <meta name="description"
        content="Una agencia de viajes de lujo en Cusco - Perú. ✅ Disfrute de la magia de de esta increible tierra." />
    <meta property="og:image" content="https://andeanexclusive.com/img/machupicchu.png" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/index-castellano" />
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="#" rel="home" class="logo-text-link">
                                    <div class="logo2"></div>
                                </a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu-castellano')
                                    <li id="display">
                                        <a href="{{ route('inicio') }}">
                                            <button type="button" class="btn botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('index') }}">
                                            <button type="button" class="btn botondjm">English</button>
                                        </a>
                                    </li>
                                </ul>
                                <a href="javascript:;" id="mobile-menu"><span></span></a>
                                <a href="javascript:;" id="close-menu"></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="section-content no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <article class="blog-item blog-single">
                            <div class="entry-excerpt">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-onepage-title="Home"
                                    data-onepage-slug="home"
                                    class="vc_row wpb_row vc_row-fluid fondoindex vc_row-has-fill vc_row-o-full-height vc_row-o-columns-middle vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1461317698190">
                                            <div class="wpb_wrapper">
                                                <div class='carousel-headings '>
                                                    <h2 class="text-center" style="color: #fff">¡Reserva ahora!</h2>

                                                    <p class="text-center" style="color: #fff; font-weight: 800">
                                                        Encuentre disponibilidad para su viaje.</p>
                                                    @if (session()->has('flash'))
                                                        <center>
                                                            <div class="alert alert-success" id="alerta"
                                                                style="width: 60%;">
                                                                {{ session()->get('flash') }}<button type="button"
                                                                    onclick="bye()" style="float: right;">X</button>
                                                            </div>
                                                        </center>
                                                    @endif

                                                    <form class="form" action="{{ route('book-castellano') }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-2">
                                                                <input class="form-control" type="text" name="da"
                                                                    placeholder="Fecha de Llegada" onclick="ocultarError();"
                                                                    onfocus="(this.type='date')"
                                                                    onblur="(this.type='text')">

                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input class="form-control" type="text" name="do"
                                                                    placeholder="Fecha de Salida" onclick="ocultarError();"
                                                                    onfocus="(this.type='date')"
                                                                    onblur="(this.type='text')">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input type="number" class="form-control" id="adults"
                                                                    placeholder="Adultos" required name="adultos">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input type="number" class="form-control" id="children"
                                                                    placeholder="niños" name="child">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input type="email" class="form-control" id="email"
                                                                    placeholder="email@peru.com" required name="email">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input type="text" class="form-control" id="text"
                                                                    name="mensaje" placeholder="Mensaje">
                                                            </div><br>
                                                        </div>

                                                        <div class="col-lg-12" style="padding-top: 10px">

                                                            <div class="col-lg-4"></div>

                                                            <div class="col-lg-4">
                                                                <input id="botonindex2" type="submit" name="submit"
                                                                    value="Enviar" />
                                                            </div>
                                                            <div class="col-lg-4"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="container" style="padding-top: 3em; padding-bottom:5em">
                                    <div class="row">
                                        <div class="col-lg-12" style="padding-bottom: 3em">
                                            <div class='heading  text-center '>
                                                <h3>Más vendidos 2022</h3>
                                                <div class='seperator'></div>
                                                <div class='desc'>
                                                    <p class="text-center">Disfruta de los mejores tours, viajes y
                                                        paquetes vacacionales en Perú
                                                        <br /> ¡Tenemos los tours más lujosos y exclusivos para ti!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach ($tours as $tour)
                                            <div class="col-lg-6">
                                                <div class='swiper-slide'>
                                                    <div class='travel-item'>
                                                        <div class='entry-img'>
                                                            <a href='{{ route('estour.show', $tour->slug) }}'
                                                                class='entry-link'>
                                                                <img src="{{ asset($tour->imgThumb) }}"
                                                                    class="attachment-post-grid-s size-post-grid-s"
                                                                    alt="{{ $tour->nombre }}" loading="lazy"
                                                                    style="height: 245px!important" />
                                                            </a>
                                                        </div>
                                                        <div class='entry-info'>
                                                            <div class='readmore'>
                                                                <h3>{{ $tour->nombre }}</h3>
                                                                <h5 class="justify">
                                                                    {{ $tour->descripcionCorta }}
                                                                </h5>
                                                                <div
                                                                    style="width: 100%; padding-top:18px; padding-bottom:40px">
                                                                    <span style="float: left"><i
                                                                            class="fa fa-clock-o"></i>
                                                                        {{ $tour->dias }} días</span>
                                                                    <span style="float: right"><i class="fa fa-usd"></i>
                                                                        {{ $tour->precio }}.00</span>
                                                                </div>
                                                                <a href="{{ route('estour.show', $tour->slug) }}"
                                                                    class='button'>Más info</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    data-vc-stretch-content="true" data-onepage-title="Gallery"
                                    data-onepage-slug="our-gallery"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248454146 vc_row-no-padding">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class='heading  text-center'>
                                                    <h3>Hoteles que trabajan con Andean Exclusive</h3>
                                                    <div id="separadordjm"></div>
                                                    <div id="separador"></div>
                                                </div>
                                                <div class='travel-grid ' data-columns='3' data-col-class='.col-sm-4'>
                                                    <div class='grid-container'>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-europe ftr-our-gallery'
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Belmond-hotel-Nazarenas.webp"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Hotel Belmond Nazarenas" loading="lazy" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Cusco</a></h3>
                                                                        <div class='entry-cat'><a>Belmond Hotel
                                                                                Nazarenas</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-europe ftr-our-gallery'
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Belmond-Hotel-Sol-y-Luna.webp"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Hotel Sol y Luna" loading="lazy" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Valle Sagrado</a></h3>
                                                                        <div class='entry-cat'><a>Hotel Sol y Luna</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-our-gallery ftr-south-africa'
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Belmond-sanctuary-lodge-peru.webp"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Belmond Santuary Lodge" loading="lazy" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Machu Picchu</a></h3>
                                                                        <div class='entry-cat'><a>Santuary Lodge
                                                                                Hotel</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-our-gallery ftr-south-america '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Miraflores-park-hotel-peru.webp"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Miraflores Park Hotel" loading="lazy" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Lima</a></h3>
                                                                        <div class='entry-cat'><a>Miraflores Park
                                                                                Hotel</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-north-america ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Hotel-titilaka-puno.webp"
                                                                    alt="Hotel Titilaka Puno" loading="lazy" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Puno</a></h3>
                                                                        <div class='entry-cat'><a>Titilaka Hotel</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-asia ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/inkaterra-reserva-amazonica.webp"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Reserva Amazonica" loading="lazy" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Puerto Maldonado</a></h3>
                                                                        <div class='entry-cat'><a>Reserva Amazonas</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-asia ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/junior-suite-hotel-b-lima.webp"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Reserva Amazonica" loading="lazy" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Lima</a></h3>
                                                                        <div class='entry-cat'><a>Hotel B</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-asia ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/per_cusco-casa-cartagena.webp"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Reserva Amazonica" loading="lazy" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Cusco</a></h3>
                                                                        <div class='entry-cat'><a>Casa Cartagena</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-asia ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/hotelsdotcom-hacienda-inkaterra.webp"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Reserva Amazonica" loading="lazy" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Sacred Valley</a></h3>
                                                                        <div class='entry-cat'><a>Casona Inkaterra</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 100px"></div>
                                <section class="pt-5 pb-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class='heading  text-center '>
                                                    <h3>Destinos Populares</h3>
                                                    <div class='seperator'></div>
                                                </div>
                                            </div>
                                            <div class="row espacio">
                                                @foreach ($tours2 as $tour)
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card" style="padding-bottom: 35px">
                                                            <a href='{{ route('estour.show', $tour->slug) }}'>
                                                                <img class="img-fluid" alt="{{ $tour->nombre }}"
                                                                    src="{{ asset($tour->imgThumb) }}" loading="lazy"
                                                                    style="width:100%;height: 200px; objet-fit:cover">
                                                            </a>
                                                            <div class="card-body">
                                                                <div class='entry-info'>
                                                                    <h4>{{ $tour->nombre }}</h4>
                                                                    <p>{{ $tour->descripcionCorta }}</p>
                                                                    <div
                                                                        style="width: 100%; padding-top:5px; padding-bottom:42px">
                                                                        <span style="float: left"><i
                                                                                class="fa fa-clock-o"></i>
                                                                            {{ $tour->dias }} días</span>
                                                                        <span style="float: right"><i
                                                                                class="fa fa-dollar"></i>
                                                                            {{ $tour->precio }}.00</span>
                                                                    </div>
                                                                    <a href='{{ route('estour.show', $tour->slug) }}'
                                                                        id='botonnuevo'>Más info</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div id="separador"></div>
                            <div class="row text-center">
                                <div class='heading  text-center'>
                                    <h3>Marcas que trabajan con nosotros</h3>
                                    <div id="separadordjm"></div>
                                </div>
                                <div id="divdjm">
                                    <div class="col-lg-3 text-center">
                                        <img src="../img/logos/aatc.webp" id="filtro" alt="aatc cusco">
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <img src="../img/logos/marca_peru.webp" id="filtro" alt="Marca Perú ">
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <img src="../img/logos/regenera2.webp" id="filtro" alt="Regenera Cusco Perú">
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <img src="../img/logos/tripadvisor.webp" id="filtro" alt="Trip Advisor">
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="section-content no-padding">
                <div class="contenedorBlogs row">
                    @foreach ($blogs as $blog)
                        <div class="imagen col-lg-3">
                            <img src="{{ asset($blog->imgThumb) }}" alt="{{ $blog->nombre }}" loading="lazy">
                            <div class="cardBlog">
                                <h3>{{ $blog->nombre }}</h3>
                                <p>{{ $blog->descripcionCorta }} </p>
                                <div class="btn-container">
                                    <a href="{{ route('esblog.show', $blog->slug) }}" target="_blank"
                                        class="btn">Leer
                                        blog</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div data-vc-full-width="true" data-vc-full-width-init="false"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1461246190555 vc_row-has-fill">
                    <div class='heading  text-center '>
                        <h3 style="color:#fff">Comentarios de clientes</h3>
                        <div class='desc'>
                            <p style="color: #fff" class="text-center">Somos realmente responsables de lo
                                que piensas y de lo que sientes ahora. Hacemos lo que usted <br> necesita
                                y lo que logra para un buen servicio.
                            </p>
                        </div>
                        <div class='seperator' style='background-color:#9499bb;'></div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-1">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-10">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class='carousel-testimonials text-light'>
                                    <div class='swiper-container'>
                                        <div class='swiper-wrapper' style="height: auto;">
                                            <div class='swiper-slide'>
                                                <div class='testimonial'>
                                                    <div class='stars'><i class='fa fa-star'></i><i
                                                            class='fa fa-star'></i><i class='fa fa-star'></i><i
                                                            class='fa fa-star'></i><i class='fa fa-star'></i>
                                                    </div>
                                                    <div class='tcontent'>“On behalf of all Blue Parallel
                                                        team, I
                                                        would like to thank you a million for all the hard
                                                        and
                                                        excellent work over the past 12 years . It has been
                                                        a real
                                                        pleasure to work with you and we always felt that we
                                                        could
                                                        count on you regardless of the day / time and
                                                        regardless of
                                                        how challenging the request was. We will miss you a
                                                        lot as
                                                        we almost felt you were part of our day -to day
                                                        team. We
                                                        wish you the best of luck, and we hope that our
                                                        paths will
                                                        again cross in the future. ”</div>
                                                    <br>
                                                    <strong>Emmanuel Burgio - President Blue Parallel.
                                                        Inc.</strong>
                                                </div>
                                            </div>
                                            <div class='swiper-slide'>
                                                <div class='testimonial'>
                                                    <div class='stars'><i class='fa fa-star'></i><i
                                                            class='fa fa-star'></i><i class='fa fa-star'></i><i
                                                            class='fa fa-star'></i><i class='fa fa-star'></i>
                                                    </div>
                                                    <div class='tcontent'>“Hello Carmen:
                                                        <br> Thank you for our delicious lunch with you. We
                                                        enjoyed
                                                        it very much and also our weaving visit and guinea
                                                        pig !!
                                                        You and your mother are twins!! I just wanted to
                                                        confirm we
                                                        leave lake titilaka hotel with octavio tomorrow at
                                                        07.00am.
                                                        Thank you and until next time”
                                                    </div>
                                                    <br>
                                                    <strong>The Anderson Family</strong>
                                                </div>
                                            </div>
                                            <div class='swiper-slide'>
                                                <div class='testimonial'>
                                                    <div class='stars'><i class='fa fa-star'></i><i
                                                            class='fa fa-star'></i><i class='fa fa-star'></i><i
                                                            class='fa fa-star'></i><i class='fa fa-star'></i>
                                                    </div>
                                                    <div class='tcontent'>“Dear Carmen, Marleny, Luisa and
                                                        Raquel:
                                                        <br> I hope you are good I just wanted to tell you
                                                        from the
                                                        date my load left as a Travel Planner in Aracari.
                                                        Keep in
                                                        touch with the company and I hope we can find again
                                                        in the
                                                        future It has been a pleasure working together with
                                                        Andean
                                                        Exclusive team and I thank you very much for your
                                                        professionalism, patience, support and dedication. I
                                                        leave
                                                        my contact information”
                                                    </div>
                                                    <br>
                                                    <strong>Travel Planner in Aracari</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='swiper-pagination'></div>
                                    <div class='swiper-button-prev'></div>
                                    <div class='swiper-button-next'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-1">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
            </div>
            <div class="row" id="bookindex">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div id="separador"></div>
                    <div id="separador"></div>
                    <div class='heading  text-center'>
                        <h3>Como encontrarnos</h3>
                        <div class='seperator'></div>
                        <div class='desc'>
                            <p class="text-center">Envíenos un mensaje para contactarnos</p>
                        </div>
                    </div>
                    <div id="separador"></div>
                    <!-----Booking---------->
                    <div class="form text-center">
                        <h4 style="padding-top: 13px">Solicitar reserva</h4>
                        <form action="{{ route('bookindex2') }}" method="post" role="form" class="book1">
                            @csrf
                            <div class="form-row">
                                <br>
                                <div class="form-group col-lg-12">
                                    <span class="form-label">Nombre:</span>
                                    <input type="text" name="nombre" required class="form-control"
                                        placeholder="Requerido*" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <span class="form-label">E-Mail:</span>
                                    <input type="email" class="form-control" required name="email" id="email"
                                        placeholder="Requerido*" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                </div>
                                <div class="col-lg-6">
                                    <span class="form-label">Teléfono:</span>
                                    <input type="text" class="form-control" required name="telefono"
                                        id="telefono" />
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <span class="form-label">Envíenos un mensaje:</span>
                                <textarea class="form-control" name="mensaje" id="mensaje" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="col-lg-12 mx-auto text-center">
                                <p id="checkmark" style="color:#fff;display: none; text-align:center; transition: opacity 0.5s ease">
                                    Respuesta correcta! &#10004;</p>
                                <div id="captcha" style="opacity: 1; transition: opacity 0.5s ease; padding-top:1em">
                                    <span for="suma" style="float:initial">Resolver Captcha antes de enviar:</span><br>
                                    <span id="num1" style="float: initial"></span> <i style="color:#fff">+</i> <span id="num2" style="float: initial"></span> 
                                    <i style="color: #fff">=</i>
                                    <span style="float: initial">
                                        <input type="number" id="respuesta" name="respuesta" required style="width: 120px; color:#000">
                                    </span>
                                    <span style="float: initial">
                                        <button type="button" id="verificar"
                                            style="background:#fff; color:#000;border:1px solid grey">verify</button>
                                    </span>
                                    <input type="hidden" id="valorCorrecto" name="valorCorrecto">
                                </div>
                            </div>
                            <input id="botondjm2" type="submit" name="submit" value="Enviar" disabled/>
                            <br>
                            <br>
                        </form>
                        <script>
                            var intentos = 0;
                    
                            function generarSumaAleatoria() {
                                var num1 = Math.floor(Math.random() * 12) + 3;
                                var num2 = Math.floor(Math.random() * (15 - num1)) + num1;
                                var suma = num1 + num2;
                                var num1Elemento = document.getElementById("num1");
                                var num2Elemento = document.getElementById("num2");
                                num1Elemento.textContent = num1;
                                num2Elemento.textContent = num2;
                                var valorCorrecto = document.getElementById("valorCorrecto");
                                valorCorrecto.value = suma;
                            }
                            window.onload = generarSumaAleatoria;
                            document.getElementById("verificar").addEventListener("click", function() {
                                var respuestaUsuario = parseInt(document.getElementById("respuesta").value);
                                var valorCorrecto = parseInt(document.getElementById("valorCorrecto").value);
                    
                                if (respuestaUsuario === valorCorrecto) {
                                    var captchaDiv = document.getElementById("captcha");
                                    captchaDiv.style.opacity = "0";
                                    setTimeout(function() {
                                        captchaDiv.style.display = "none";
                                    }, 500);
                                    document.getElementById("botondjm2").disabled = false;
                                    document.getElementById('checkmark').style.display = 'block';
                                    setTimeout(function() {
                                        document.getElementById('checkmark').style.display =
                                            'none';
                                    }, 1200);
                                } else {
                                    intentos++;
                                    if (intentos === 3) {
                                        alert("Has fallado 3 veces. Se te redirigirá a la página de error.");
                                        window.location.href = "404";
                                    } else {
                                        alert("Respuesta incorrecta. Intento " + intentos + " de 3. Por favor, verifica tu respuesta.");
                                        generarSumaAleatoria();
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </section>
    @endsection
