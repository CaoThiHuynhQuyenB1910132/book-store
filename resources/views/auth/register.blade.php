{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="full_name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name')
                                }}</label>

                            <div class="col-md-6">
                                <input id="full_name" type="text"
                                    class="form-control @error('full_name') is-invalid @enderror" name="full_name"
                                    value="{{ old('full_name') }}" required autocomplete="name" autofocus>

                                @error('full_name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
            <h3 class="heading-style-3">Đăng Ký</h3>
        </section>
        <section class="boxed-sm">
            <div class="container">
                <div class="login-wrapper">
                    <div class="row">
                        <h3>Đăng Ký Tài Khoản</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group organic-form-2">
                                <label>Họ Và Tên *</label>
                                <input id="full_name" type="text"
                                    class="form-control @error('full_name') is-invalid @enderror" name="full_name"
                                    value="{{ old('full_name') }}" required autocomplete="name" autofocus>

                                @error('full_name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group organic-form-2">
                                <label>Email *</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group organic-form-2">
                                <label>Nhắc Lại Mật Khẩu *</label>

                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">

                            </div>

                            <div class="form-group footer-form">
                                <button class="btn btn-brand pill" type="submit">{{ __('Đăng Ký') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
