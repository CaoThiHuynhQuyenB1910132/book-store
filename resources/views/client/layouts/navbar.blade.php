<div>
    <nav id="menu">
        <ul>
            <li>
                <a href="/">Trang Chủ</a>
            </li>
            <li>
                <a class="active" href="{{route('shop')}}">Cửa Hàng</a>
            </li>
            <li>
                <a href="{{route('contact')}}">Liên Hệ</a>
            </li>
            @if (Auth::check())
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Đăng Xuất</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @else
            <li>
                <a href="{{route('login')}}">Đăng nhập</a>

            </li>
            <li><a href="{{route('register')}}">Đăng ký</a></li>
            @endif

        </ul>
    </nav>

    <header class="header-style-3">
        <a class="brand-logo animsition-link" href="/">
            <img class="img-responsive" src="client/images/logo.png" alt="" />
        </a>
        <div class="header-3-inner">
            <div class="widget widget-control-header widget-search-header">
                <a class="btn-open-search-form js-open-search-form-header" href="#">
                    <span class="lnr lnr-magnifier"></span>
                </a>
            </div>
            <nav>
                <ul class="menu hidden-xs">
                    <li>
                        <a href="/">Trang Chủ</a>
                    </li>
                    <li>
                        <a class="active" href="{{route('shop')}}">Cửa Hàng</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Liên Hệ</a>
                    </li>
                    @if (Auth::check())
                    {{-- <li>
                        <a href="#">Tài khoản của tôi</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Đăng Xuất</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li>
                        <a href="{{route('login')}}">Đăng nhập</a>

                    </li>
                    <li>
                    <a href="{{route('register')}}">Đăng ký</a>
                    </li>
                    @endif
                </ul>
            </nav>
            <aside class="right">
                <livewire:client.cart.mini-cart>

                    <div class="widget widget-control-header hidden-lg hidden-md hidden-sm">
                        <a class="navbar-toggle js-offcanvas-has-events" type="button" href="#menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                    </div>
            </aside>
        </div>
    </header>
</div>
