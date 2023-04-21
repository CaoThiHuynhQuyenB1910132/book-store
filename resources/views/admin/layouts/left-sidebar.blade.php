<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="admin/assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="admin/assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="admin/assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="admin/assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-item">
                <a href="{{route('books')}}" class="side-nav-link">
                    <i class="uil-book-alt"></i>
                    <span> Books </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('authors')}}" class="side-nav-link">
                    <i class=" uil-chat-bubble-user"></i>
                    <span> Authors </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('categories')}}" class="side-nav-link">
                    <i class=" uil-tag-alt"></i>
                    <span> Categories </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('orders')}}" class="side-nav-link">
                    <i class="uil-list-ul"></i>
                    <span> Orders </span>
                </a>
            </li>
        </ul>

        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>

</div>