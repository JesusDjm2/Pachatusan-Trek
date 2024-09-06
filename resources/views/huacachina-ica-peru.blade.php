@extends('layouts.general-en')
@section('metas')
    <title>Ica sunshine - Huacachina Perú </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="3 days tour, Luxury huacachina, ica tours, ica, travel to Peru" />
    <meta name="description" content="Enjoy this tour in the Ica, Huacachina - Perú." />
    <meta property="og:url" content="https://www.andeanexclusive.com/huacachina-ica-peru">
    <meta property="og:title" content="Ica sunshine - Huacachina Perú">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/huacachina-tour-exclusive-peru.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/huacachina-ica-peru" />
@endsection
@section('contenido')
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-wrapper">
                        <div class="site-branding">
                            <a href="/" rel="home" class="logo-text-link">
                                <div class="logo2"></div>
                            </a>
                        </div>
                        <nav class="main-nav">
                            <ul class="one-page-menu">
                                @include('layouts.menu')
                                <li id="display">
                                    <a href="{{ route('huacachina-ica-peru') }}">
                                        <button type="button" class="btn botondjm">Español</button>
                                    </a>
                                </li>
                                <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr' target="_blank">+51
                                        979 721 194</a></li>
                                <li id="display2">
                                    <a href="{{ route('huacachina-ica-peru') }}">
                                        <button type="button" class="btn botondjm">Español</button>
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
                                class="vc_row wpb_row huacachina vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1461317698190">
                                        <div class="wpb_wrapper">
                                            <div class='carousel-headings'>
                                                <div class='swiper-container'>
                                                    <div class='swiper-wrapper'>
                                                        <div class='swiper-slide'>
                                                            <div class='cover-text ph5 text-light text-center pv8 pvb0'>
                                                                @if (session()->has('flash'))
                                                                    <center>
                                                                        <div class="alert alert-success" id="alerta"
                                                                            style="width: 60%;">
                                                                            {{ session()->get('flash') }}<button
                                                                                type="button" onclick="bye()"
                                                                                style="float: right;">X</button>
                                                                        </div>
                                                                    </center>
                                                                @endif
                                                                <h1><?php $tour = 'HUACACHINA: SANDBOARDING + BUGGIES';
                                                                echo $tour; ?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Ica - Perú </p>
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
                                <div id="separador"></div>
                                <div class="row" id="rowdjm">
                                    <div class="location">
                                        <div class="row text-center">
                                            <div class="col-lg-3 col-sm-2" id="display2">
                                                <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12"><a href="/">Home</a> /
                                                <a href="experiences">Popular</a> /
                                                <a>Huacachina - Perú</a>
                                            </div>
                                            <div class="col-lg-3 col-sm-2" id="display2">
                                                <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="display2">
                                        <h4 class="text-center">Similar Tours</h4><br>
                                        <div id="similares">
                                            <a href="peru-5-days-4-nights" class="button">Perú for 5</a>
                                        </div>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="peru-8-days-7-nights" class="button">Perú for 8</a>
                                        </div>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="biking" class="button">Biking in the andes</a>
                                        </div>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="adventures/atv-tour" class="button">ATV in the sky</a>
                                        </div>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="blog/nazca-lines-peru" class="button">Nazca Lines</a>
                                        </div>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="cusco-6-days-5-nights" class="button">Cusco for 6
                                                days</a>
                                        </div>
                                        <div id="separador"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <center>
                                            <h1 id="titulo1">HUACACHINA 2 days: SANDBOARDING + BUGGIES</h1>
                                            <div id="separadordjm2"></div>
                                            <p class="text-center"><i class="fa fa-clock-o"></i> 2 days</p>
                                            <p class="text-center"><i class="fa fa-map-marker"></i> Huacachina - Ica</p>
                                            <p class="text-center" style="color: #0c8178">Reserve 30 days in
                                                advance </p>
                                        </center>
                                        <h5>Overview:</h5>
                                        <p>
                                            The vast Ica desert offers a wealth of experiences. Let’s begin with the
                                            most well-known: boat rides to the Ballestas Islands, a flight over the
                                            Nasca Lines, a lakeside afternoon at the Huacachina oasis, sandboarding,
                                            or a luxurious picnic in the desert. What do these experiences have in
                                            common? Nothing! Every experience in Ica is remarkable and unique. <br>
                                            Ica, so close to Lima, a city of eternal sunshine and home to famous
                                            vineyards, is waiting for you!
                                        </p>
                                        <img src="{{ asset('img/blog/Huacachina-Buggies-Andean-Exclusive-Tours.webp') }}"
                                            alt="Huacachina Sandboarding Ica Peru Andean Exclusive"
                                            loading="lazy"><br><br>
                                        <h5>DAY 1: TUBULAR RIDE</h5>
                                        <p>
                                            - Check-in at the hotel<br>
                                            - 03:30 PM Start of the adventure circuit in the desert, where they will
                                            take a ride of pure adrenaline in sand buggies and will also be able to
                                            do sandboarding (sliding on boards), circuit lasts about an hour.<br>
                                            - Night of accommodation in selected hotel.
                                        </p>
                                        <h5>DAY 2: CITY TOUR ICA</h5>
                                        <p>
                                            - Breakfasts<br>
                                            - Pick up from your hotel. As a first point, we will visit the artisanal
                                            winery, where we will learn about the elaboration of wine and Pisco, as
                                            well as have the opportunity to taste the various pisco and wines from
                                            the wineries. We continue with the visit to the Plaza de Armas of the
                                            city, where we will observe the main streets of Ica, we will also visit
                                            Chocolatería Helena, the Señor de Luren Church. Then we will go to the
                                            mystical town of Cachiche, a well-known town in Ica since it was a place
                                            where the ancient witches were found, there you will be able to see the
                                            7-headed Palm Tree. Finally, we will visit the majestic Huacachina
                                            lagoon, known as "The Oasis of America", from this point we will be able
                                            to appreciate the impressive desert landscape of the dunes, and take
                                            incredible photos of the sunset. At the end of the tour, we return to
                                            the hotel.<br>
                                            - Check out
                                        </p>
                                        <h5>Includes</h5>
                                        <p>
                                            &#10003; 01 night accommodation in hotel with pool<br>
                                            &#10003; breakfasts<br>
                                            &#10003; Tubular Ride + Sandboarding<br>
                                            &#10003; city ​​tours<br>
                                            &#10003; PCrsonalized assistance
                                        </p>
                                        <h5>Does not Include</h5>
                                        <p>
                                            &#10007; Entrance ticket to the dunes.<br>
                                            &#10007; Transfers from Lima to Ica or vice versa (you can request this
                                            additional service).<br>
                                            &#10007; Pick up at the bus station and transfer to the hotel (you can
                                            request
                                            this additional service).<br>
                                            &#10007; IGV, if you want an invoice, add 18%
                                        </p>
                                        <h5>Booking</h5>
                                        <p>
                                            &#10020; Minimum payment of 50% to guarantee your reservation<br>
                                            &#10020; You can pay with any credit/debit card or by bank deposit<br>
                                            &#10020; Check availability before making the payment<br>
                                            &#10020; The price of the tour varies according to the type of
                                            accommodation
                                        </p>
                                        <div id="separador"></div>

                                        <div class="form text-center">
                                            @include('layouts.payments')
                                            <h5>Share</h5>
                                            <!---------redes sociales------------------------>
                                            <script type="text/javascript"
                                                src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&product=inline-share-buttons"
                                                async="async"></script>
                                            <div class="sharethis-inline-share-buttons"></div>
                                            <div id="fb-root"></div>
                                            <script async defer crossorigin="anonymous"
                                                src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                                                nonce="RA0e6tQN"></script>
                                            <div class="fb-comments"
                                                data-href="https://andeanexclusive.com/huacachina-ica-peru"
                                                data-width="100%" data-numposts="5"></div>
                                            <!---------Fin redes sociales------------------------>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <!-----Booking---------->
                                        <div class="form text-center" id="display2">
                                        </div> <br><br>
                                        <div id="anuncioright">
                                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                            <!-- Largo derecha -->
                                            <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px"
                                                data-ad-client="ca-pub-6570209707738783" data-ad-slot="7960359151"></ins>
                                            <script>
                                                (adsbygoogle = window.adsbygoogle || []).push({});
                                            </script>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div data-onepage-title="Services" data-onepage-slug="services" id="display"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1461227943574">
                                        <div class="wpb_wrapper">
                                            <div class='heading  text-center'>
                                                <div id="separador"></div>
                                                <h3>Similar Tours</h3>
                                                <div id="separadordjm"></div>
                                            </div>
                                        </div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner vc_custom_1461228417147">
                                                    <div class="wpb_wrapper">
                                                        <div class='travel-item'>
                                                            <div class='entry-img'>
                                                                <a class='entry-link' href="arequipa-3-days"><img
                                                                        srcset="img/thumbnail/arequipa-perú.JPG 1000w, img/thumbnail/arequipa-perú.JPG 500w" /></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <h3>Arequipa </h3>
                                                                <div class='info'>
                                                                    Duration: 4 days
                                                                </div>
                                                                <div class='readmore'>
                                                                    <a href='arequipa-3-days' class='button'>Read
                                                                        more</a>
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
                                                            <div class='entry-img'>
                                                                <a class='entry-link' href="Hiram_bingham"><img
                                                                        width="400" height="400"
                                                                        src="img/thumbnail/Machupicchu.jpg"
                                                                        class="attachment-post-grid-s size-post-grid-s"
                                                                        alt=""
                                                                        srcset="img/thumbnail/Machupicchu.jpg 400w"
                                                                        sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <h3>Machu Picchu By Hiram Bingham</h3>
                                                                <div class='info'>
                                                                    Duration: 1 days
                                                                </div>
                                                                <div class='readmore'>
                                                                    <a href="Hiram_bingham" class='button'>Read
                                                                        more</a>
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
                                                            <div class='entry-img'>
                                                                <a class='entry-link' href="Sacred_Valley"><img
                                                                        width="400" height="400"
                                                                        src="img/thumbnail/chincheros.jpg"
                                                                        class="attachment-post-grid-s size-post-grid-s"
                                                                        alt=""
                                                                        srcset="img/thumbnail/chincheros.jpg 400w"
                                                                        sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <h3>Sacred Valley</h3>
                                                                <div class='info'>
                                                                    Duration: 1 day
                                                                </div>
                                                                <div class='readmore'>
                                                                    <a class='button' href="Sacred_Valley">Read
                                                                        more</a>
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
                                                            <div class='entry-img'>
                                                                <a class='entry-link' href="peru-5-days-4-nights"><img
                                                                        width="400" height="400"
                                                                        src="img/thumbnail/Machupicchu.jpg"
                                                                        class="attachment-post-grid-s size-post-grid-s"
                                                                        alt="hiram bingham"
                                                                        srcset="img/thumbnail/Machupicchu.jpg 400w"
                                                                        sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <h3>Peru 5 days 4 nights</h3>
                                                                <div class='readmore'>
                                                                    <a href='peru-5-days-4-nights' class='button'>Read
                                                                        more</a>
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
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
