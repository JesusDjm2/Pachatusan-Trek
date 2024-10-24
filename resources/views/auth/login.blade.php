@extends('layouts.admin')

@section('contenido')
    <section class="banner-section">
        <div class="banner-content">
           <div class="container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">
                    <label for="email" class="col-md-12 col-form-label">{{ __('Email:') }}</label>
                    <div class="col-lg-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3" style="margin-top: 1em">
                    <label for="password" class="col-md-12 col-form-label">{{ __('Contraseña:') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="text-center">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                    </div>
                </div>
            </form>
           </div>
        </div>
    </section>
    {{-- <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="/" rel="home" class="logo-text-link">
                                    <img src="{{ asset('img/logo-pachatusan-trek.png') }}" alt="" width="220px">
                                </a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
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
                                                <div class='carousel-headings'>
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body pt-5">
                                                                <div class="card-header text-center"
                                                                    style="padding-top: 1em; padding-bottom:1.2em">
                                                                    {{ __('Login') }}</div>

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
    </div>

    <div class="container">
        <div class="row justify-content-center">

        </div>
    </div> --}}
@endsection
