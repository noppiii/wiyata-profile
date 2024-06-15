 <!-- ====== start sidemenu navbar ====== -->
 <div class="side_menu style-7" id="side_menu">
    <a href="#0" class="side_menu_cls">
        <img src="{{ asset('client/assets/img/icons/4dots.png') }}" alt="">
    </a>
    <div class="content">
        <div class="logo">
            <a href="#" class="w-100">
                <img src="{{ asset('client/assets/img/logo_lgr.png') }}" alt="">
            </a>
        </div>
        <div class="pages_links">
            <ul>
                <li><a href="#" class="{{ request()->is('/*') ? 'active' : '' }}">Home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">services</a></li>
                <li><a href="#">portfolio</a></li>
                <li><a href="#" class="{{ request()->is('blog*') ? 'active' : '' }}">blog</a></li>
                <li><a href="#">contact</a></li>
                <li><a href="#">shop</a></li>
            </ul>
        </div>
        <div class="side_foot">
            <h5> get in touch </h5>
            <div class="row">
                <div class="col-lg-6">
                    <a href="https://wa.me/62881027639635?text=Hello%20I%20am%20interested%20in%20your%20services" target="_blank">
 <i class="fal fa-phone-alt me-2"></i> +62 881-0276-39635 </a>
                </div>
                <div class="col-lg-6">
                    <a href="#"> <i class="fal fa-envelope me-2 mt-4 mt-lg-0"></i> wiyatasoftwaredigital24@gmail.co </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="side_overlay"></div>
<!-- ====== end sidemenu navbar ====== -->

<!-- ====== start top navbar ====== -->
<div class="top-navbar style-7">
    <div class="container">
        <div class="row justify-content-between gx-0">
            <div class="col-7">
                <div class="top_info">
                    <a href="#" class="me-4">
                        <i class="fas fa-envelope-open me-1 color-blue7"></i>
                        <span>wiyatasoftwaredigital24@gmail</span>
                    </a>
<a href="https://wa.me/62881027639635?text=Hello%20I%20am%20interested%20in%20your%20services" target="_blank">
                        <span>+62 881-0276-39635</span>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="side_links d-flex justify-content-lg-end">
                    <a href="#" class="me-4"> Careers </a>
                    <a href="#" class="me-4"> Faq </a>
                    <!--<div class="dropdown border-1 border-start ps-4">-->
                    <!--    <a class="dropdown-toggle fw-bold" href="#" id="navbarDropdown1" role="button"-->
                    <!--        data-bs-toggle="dropdown" aria-expanded="false">-->
                    <!--        English-->
                    <!--    </a>-->
                    <!--    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">-->
                    <!--        <li><a class="dropdown-item" href="#0"> Arabic </a></li>-->
                    <!--        <li><a class="dropdown-item" href="#0"> french </a></li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== end top navbar ====== -->

<!-- ====== start navbar ====== -->
<nav class="navbar navbar-expand-lg navbar-light style-7">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('client/assets/img/wiyatawarna.png') }}" width="150" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-4">
                <li class="nav-item dropdown">
                       <a class="nav-link {{ request()->is('/*') ? 'active' : '' }}" href="{{ route('home') }}">
                        Homes
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown2" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        service
                        <!-- <small class="hot alert-danger text-danger">hot</small> -->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="page-about-app.html">Konsultasi IT</a></li>
                        <li><a class="dropdown-item" href="page-product-app.html">Pengembangan Perangkat Pintar</a></li>
                        <li><a class="dropdown-item" href="page-services-app.html">Pengembangan Perangkat Lunak Kustom</a></li>
                        <li><a class="dropdown-item" href="page-shop-app.html">Manajemen Proyek Teknologi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page-portfolio-app.html">
                        portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog*') ? 'active' : '' }}" href="{{ route('blog') }}">
                        blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page-contact-app.html">
                        <!-- <img src="assets/img/icons/nav_icon/price.png" alt="" class="icon-15 me-1"> -->
                        contact
                    </a>
                </li>
            </ul>
            <div class="nav-side">
                <div class="d-flex align-items-center">
                    <a href="{{ route('login') }}" class="me-4">
                        <img src="{{ asset('client/assets/img/icons/user.png') }}" alt="">
                    </a>
                    <a href="#0" class="side_menu_btn">
                        <img src="{{ asset('client/assets/img/icons/4dots.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- ====== end navbar ====== -->
