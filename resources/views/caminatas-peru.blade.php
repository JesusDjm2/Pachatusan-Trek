@extends('layouts.general-es')
@section('metas')
    <title>Tours alrededor de Perú, encuentre tours por Perú!</title>
    <meta name="keywords" content="Experiences in Perú, luxury tours, Lima, Cusco, Exclusive Cusco" />
    <meta name="description" content="We present you a list of luxury experiences for Peru." />
    <meta property="og:url" content="https://www.andeanexclusive.com/caminatas-peru">
    <meta property="og:title" content="Tours en Perú">
    <meta property="og:type" content="webside">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/Machu-Picchu-exclusive.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/caminatas-peru" />
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="{{route('inicio')}}" rel="home" class="logo-text-link">
                                    <div class="logo2"></div>
                                </a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu-castellano')
                                    <li id="display" class="menu-has-children">
                                        <a href="{{ route('adventures') }}">
                                            <button type="button" class="btn botondjm">
                                                <i class="fa fa-language"></i> English
                                            </button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="#">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="adventures">EN</a>
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
                                    class="vc_row wpb_row vc_row-fluid adventure vc_row-has-fill vc_row-o-full-height vc_row-o-columns-middle vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1461317698190">
                                            <div class="wpb_wrapper">
                                                <div class='carousel-headings '>
                                                    <div class='swiper-container'>
                                                        <div class='swiper-wrapper'>
                                                            <div class='swiper-slide'>
                                                                <div class='cover-text ph5 text-light text-center pv5 pvb0'>
                                                                    <h1>Tours para aventureros</h1>
                                                                    <div class="text-center">
                                                                        <div
                                                                            style="margin: auto;width:90px;height:4px;background-color:#0c8178">
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
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-onepage-title="Services" data-onepage-slug="services"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1461227943574">
                                            <div style="height: 40px"></div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner vc_custom_1461228417147">
                                                        <div class="wpb_wrapper">
                                                            <div class='travel-item'>
                                                                <div class='entry-img text-center'>
                                                                    <a href='adventures/tour-choquequirao'
                                                                        class='entry-link'><img
                                                                            srcset="img/thumbnail/choquequirao-treking.jpg 1000w, img/thumbnail/choquequirao-treking.jpg 500w"
                                                                            alt="Cusco tour" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <h3>Caminata Choquequirao (4 días)</h3><br>
                                                                    <div class='readmore'>
                                                                        <a href='adventures/tour-choquequirao'
                                                                            class='button'>Más Info</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner vc_custom_1461228449756">
                                                        <div class="wpb_wrapper">
                                                            <div class='travel-item'>
                                                                <div class='entry-img text-center'>
                                                                    <a href="../ciclismo" class='entry-link'><img
                                                                            width="400" height="400"
                                                                            src="img/thumbnail/biking-cusco.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="biking cusco sacred valley" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <h3>Ciclismo</h3><br>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="../ciclismo">Más info</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner vc_custom_1461228417147">
                                                        <div class="wpb_wrapper">
                                                            <div class='travel-item'>
                                                                <div class='entry-img text-center'>
                                                                    <a href="adventures/tour-atv" class='entry-link'><img
                                                                            alt="Machu Picchu - Cusco - Perú"
                                                                            src="img/thumbnail/motocros-atv-peru.jpg" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <h3>Tour en Motocros</h3><br>

                                                                    <div class='readmore'>
                                                                        <a href="adventures/tour-atv" class='button'>Más
                                                                            Info</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner vc_custom_1461228449756">
                                                        <div class="wpb_wrapper">
                                                            <div class='travel-item'>
                                                                <div class='entry-img text-center'>
                                                                    <a href="adventures/tour-rafting"
                                                                        class='entry-link'><img width="400"
                                                                            height="400"
                                                                            src="img/thumbnail/rafting-cusco-Peru.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Tour in Cusco"
                                                                            srcset="img/thumbnail/rafting-cusco-Peru.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <h3>Rafting</h3><br>
                                                                    <div class='readmore'>
                                                                        <a href="adventures/tour-rafting"
                                                                            class='button'>Más Info</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="separador"></div>
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                        <div class="vc_column-inner vc_custom_1461228442150">
                                                            <div class="wpb_wrapper">
                                                                <div class='travel-item'>
                                                                    <div class='entry-img text-center'>
                                                                        <a href="../huacachina-ica-peru-castellano"
                                                                            class='entry-link'><img width="400"
                                                                                height="400"
                                                                                src="img/thumbnail/sandboarding-ica-peru.jpg"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="Tren de ida a Machu Picchu"
                                                                                srcset="img/thumbnail/sandboarding-ica-peru.jpg 400w"
                                                                                sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                    </div>
                                                                    <div class='entry-info'>
                                                                        <h3>Sandboarding</h3><br>
                                                                        <div class='readmore'>
                                                                            <a href="../huacachina-ica-peru-castellano"
                                                                                class='button'>Más Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                        <div class="vc_column-inner vc_custom_1461228442150">
                                                            <div class="wpb_wrapper">
                                                                <div class='travel-item'>
                                                                    <div class='entry-img text-center'>
                                                                        <a href="adventures/tour-islas-palomino"
                                                                            class='entry-link'>
                                                                            <img width="400" height="400"
                                                                                src="img/thumbnail/nadar-con-lobos-marinos.jpg"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="urubamba market - cusco"
                                                                                sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                    </div>
                                                                    <div class='entry-info'>
                                                                        <h3>Nadar con lobos marinos</h3><br>
                                                                        <div class='readmore'>
                                                                            <a href="adventures/tour-islas-palomino"
                                                                                class='button'>Más Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                        <div class="vc_column-inner vc_custom_1461228449756">
                                                            <div class="wpb_wrapper">
                                                                <div class='travel-item'>
                                                                    <div class='entry-img text-center'>
                                                                        <a href="adventures/vinicunca-tour"
                                                                            class='entry-link'><img width="400"
                                                                                height="400"
                                                                                src="img/thumbnail/cerro-de-7-colores-vinicunca.jpg"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="biking cusco sacred valley" /></a>
                                                                    </div>
                                                                    <div class='entry-info'>
                                                                        <h3>Montaña de colores</h3><br>
                                                                        <div class='readmore'>
                                                                            <a class='button'
                                                                                href="adventures/vinicunca-tour">Más
                                                                                Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                        <div class="vc_column-inner vc_custom_1461228449756">
                                                            <div class="wpb_wrapper">
                                                                <div class='travel-item'>
                                                                    <div class='entry-img text-center'>
                                                                        <a href="adventures/tour-laguna-humantay"
                                                                            class='entry-link'><img width="400"
                                                                                height="400"
                                                                                src="img/thumbnail/visit-humantay-cusco.jpg"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="Sacred Valley Cusco"
                                                                                srcset="img/thumbnail/visit-humantay-cusco.jpg 400w"
                                                                                sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                    </div>
                                                                    <div class='entry-info'>
                                                                        <h3>Lago Humantay</h3> <br>
                                                                        <div class='readmore'>
                                                                            <a class='button'
                                                                                href="adventures/tour-laguna-humantay">Más
                                                                                Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="separador"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                </div>

                                <div class="vc_row-full-width vc_clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="container relacionados">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Tours de aventura en Perú</h2>
                    </div>
                    @foreach ($tours as $tour)
                        <div class="col-lg-4">
                            <div class="card" style="margin-bottom: 2em">
                                <a href="{{ route('estour.show', $tour->slug) }}">
                                    <img class="card-img-top" src="{{ $tour->imgThumb }}" alt="{{ $tour->nombre }}"
                                        loading="lazy">
                                </a>
                                <div class="card-body">
                                    <h5>{{ $tour->nombre }}</h5>
                                    <div class="linea"></div>
                                    <div class="recorrido">
                                        <i class="fa fa-map-marker"></i>&nbsp;
                                        <span>{{ $tour->recorrido }}</span>
                                    </div>
                                    <p class="card-text">{{ $tour->descripcionCorta }}</p>
                                    <div class="cuerpo">
                                        <div class="col-sm-6">
                                            <p><i class="fa fa-usd"></i> {{ $tour->precio }}.00</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="right"><i class="fa fa-clock-o"></i> {{ $tour->dias }} days</p>
                                        </div>
                                    </div>
                                    <div class="categorias">
                                        @foreach ($tour->categorias as $categoria)
                                            <a href="{{ route('categoria.show', $categoria->slug) }}">{{ $categoria->nombre }}</a>
                                            @if (!$loop->last)
                                                -&nbsp;
                                            @endif
                                        @endforeach
                                    </div>
                                    <a href="{{ route('estour.show', $tour->slug) }}" class="boton2023">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
