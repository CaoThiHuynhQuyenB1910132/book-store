<div>
    <nav id="menu">
        <ul>
            <li>
                <a href="/">Trang Chủ</a>
            </li>
            <li>
                <a class="active" href="shop.html">Cửa Hàng</a>
            </li>
            <li>
                <a href="contact.html">Liên Hệ</a>
            </li>
            <li>
                <a href="faq.html">Feature</a>
                <ul>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="register.html">Register</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <header class="header-style-1">
        <div class="container">
            <div class="row">
                <div class="header-1-inner">
                    <a class="brand-logo animsition-link" href="{{route('/')}}">
                        <img  class="img-responsive" src="client/images/logo.png" alt="" />
                    </a>
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
                            <li>
                                <a href="#">Tài khoản của tôi</a>
                            </li>
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
                            @endif
                        </ul>
                    </nav>
                    <aside class="right">
                        <div class="widget widget-control-header widget-search-header">
                            <a class="control btn-open-search-form js-open-search-form-header" href="#">
                                <span class="lnr lnr-magnifier"></span>
                            </a>
                            <div class="form-outer">
                                <button class="btn-close-form-search-header js-close-search-form-header">
                                    <span class="lnr lnr-cross"></span>
                                </button>
                                <form>
                                    <input placeholder="Search" />
                                    <button class="search">
                                        <span class="lnr lnr-magnifier"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <livewire:client.cart.mini-cart>
                        {{-- <div class="widget widget-control-header hidden-lg hidden-md hidden-sm">
                            <a class="navbar-toggle js-offcanvas-has-events" type="button" href="#menu">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a> --}}
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </header>
</div>
