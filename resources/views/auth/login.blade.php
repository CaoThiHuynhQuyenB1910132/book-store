{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html>

<!-- Mirrored from freebw.com/templates/organic/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Dec 2022 14:25:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Trang Chủ</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="client/css/main.css" />
</head>

<body class="animsition">
    <div class="login" id="page">
        <section class="sub-header shop-layout-1">
            <img class="rellax bg-overlay" src="client/images/sub-header/011.jpg" alt="">
            <div class="overlay-call-to-action"></div>
            <h3 class="heading-style-3">Đăng Nhập</h3>
        </section>
        <section class="boxed-sm">
            <div class="container">
                <div class="login-wrapper">
                    <div class="row">
                        <h3>Đăng Nhập</h3>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group organic-form-2">
                                <label>Email Của Bạn*</label>
                                <input class="form-control" name="email" type="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus>
                                @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group organic-form-2">
                                <label>Mật Khẩu *</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group remember-me">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('Ghi Nhớ Tôi') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ghi nhớ tôi') }}
                                    </label>
                                </div>

                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Bạn Quên Mật Khẩu?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group footer-form">
                                <button class="btn btn-brand pill" type="submit">Đăng Nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer-style-1">
        <div class="container">
            <div class="row">
                <div class="footer-style-1-inner">
                    <div class="widget-footer widget-text col-first col-small">
                        <a href="#">
                            <img class="logo-footer" src="client/images/logo.png" alt="Logo Organic" />
                        </a>
                        <div class="widget-link">
                            <ul>
                                <li>
                                    <span class="lnr lnr-map-marker icon"></span>
                                    <span>379 5th Ave New York, NYC 10018</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-phone-handset icon"></span>
                                    <a href="tel:0123456789">(+1) 96 716 6879</a>
                                </li>
                                <li>
                                    <span class="lnr lnr-envelope icon"></span>
                                    <a
                                        href="https://freebw.com/cdn-cgi/l/email-protection#c1e1a2aeafb5a0a2b581b2a8b5a4efa2aeac"><span
                                            class="__cf_email__"
                                            data-cfemail="5d3e3233293c3e291d2e342938733e3230">[email&#160;protected]</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-footer widget-link col-second col-medium">
                        <div class="list-link">
                            <h4 class="h4 heading">SHOP</h4>
                            <ul>
                                <li>
                                    <a href="#">Food</a>
                                </li>
                                <li>
                                    <a href="#">Farm</a>
                                </li>
                                <li>
                                    <a href="#">Health</a>
                                </li>
                                <li>
                                    <a href="#">Organic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-link">
                            <h4 class="h4 heading">SUPPORT</h4>
                            <ul>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-link">
                            <h4 class="h4 heading">MY ACCOUNT</h4>
                            <ul>
                                <li>
                                    <a href="#">Sign In</a>
                                </li>
                                <li>
                                    <a href="#">My Cart</a>
                                </li>
                                <li>
                                    <a href="#">My Wishlist</a>
                                </li>
                                <li>
                                    <a href="#">Check Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-footer widget-newsletter-footer col-last col-small">
                        <h4 class="h4 heading">NEWSLETTER</h4>
                        <p>Subscribe now to get daily updates</p>
                        <form class="organic-form form-inline btn-add-on circle border">
                            <div class="form-group">
                                <input class="form-control pill transparent" placeholder="Your Email..." type="email" />
                                <button class="btn btn-brand circle" type="submit">
                                    <i class="fa fa-envelope-o"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right style-1">
            <div class="container">
                <div class="row">
                    <div class="copy-right-inner">
                        <p>Copyright © 2017 Designed by AuThemes. All rights reserved.</p>
                        <div class="widget widget-footer widget-footer-creadit-card">
                            <ul class="list-unstyle">
                                <li>
                                    <a href="#">
                                        <img src="client/images/icons/creadit-card-01.png" alt="creadit card" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="client/images/icons/creadit-card-02.png" alt="creadit card" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="client/images/icons/creadit-card-03.png" alt="creadit card" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="client/images/icons/creadit-card-04.png" alt="creadit card" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="client/js/library/jquery.min.js"></script>
    <script src="client/js/library/bootstrap.min.js"></script>
    <script src="client/js/function-check-viewport.js"></script>
    <script src="client/js/library/slick.min.js"></script>
    <script src="client/js/library/select2.full.min.js"></script>
    <script src="client/js/library/imagesloaded.pkgd.min.js"></script>
    <script src="client/js/library/jquery.mmenu.all.min.js"></script>
    <script src="client/js/library/rellax.min.js"></script>
    <script src="client/js/library/isotope.pkgd.min.js"></script>
    <script src="client/js/library/bootstrap-notify.min.js"></script>
    <script src="client/js/library/bootstrap-slider.js"></script>
    <script src="client/js/library/in-view.min.js"></script>
    <script src="client/js/library/countUp.js"></script>
    <script src="client/js/library/animsition.min.js"></script>
    <script src="client/js/global.js"></script>
    <script src="client/js/config-mm-menu.js"></script>
    <script src="client/js/config-set-bg-blog-thumb.js"></script>
    <script src="client/js/config-accrodion.js">


    </script>
</body>

<!-- Mirrored from freebw.com/templates/organic/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Dec 2022 14:25:54 GMT -->

</html>
