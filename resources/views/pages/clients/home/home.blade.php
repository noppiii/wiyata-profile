@extends('layouts.client.main')
@section('title')
    Home || Wiyata Software Digital
@endsection
@section('pages')
Wiyata Software Digital
@endsection
@section('content')
<!--Contents-->
<!-- ====== start header ====== -->
<header class="style-7">
    <div class="content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="info mt-5 mt-lg-0">
                        <div class="section-head style-4">
                            <div class="top-title">
                                <img src="{{ asset('client/assets/img/line_l.png') }}" alt="">
                                <h5> Membentuk Masa Depan Dengan Teknologi </h5>
                            </div>
                        </div>
                        <h1>
                            <span class="num">Bersama </span> <br> Kami Membangun Bisnis Anda <span class="num">Menjadi </span> <span class="text-grad"> Lebih Baik </span>
                        </h1>
                        <div class="d-flex flex-wrap">
                            <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4" target="_blank">
                                <small> Get Started Now <i class="fas fa-long-arrow-alt-right"></i> </small>
                            </a>
                            <div class="inf mt-3 mt-lg-0">
                                <p class="color-999"> Support Email </p>
                                <a href="#" class="fw-bold"> wiyatasoftwaredigital24@gmail.com </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img mt-4 mt-lg-0">
                        <img src="{{ asset('client/assets/img/header/head_img7.png') }}" alt="">
                        <img src="{{ asset('client/assets/img/header/head7_rock.png') }}" alt="" class="rock7 slide_up_down">
                    </div>
                </div>
                <div class="col-12">
                    <div class="sponsers mt-30">
                        <div class="title me-5 flex-shrink-0">
                            <br> <span class="fw-bold"> Partnership </span>
                        </div>
                        <div class="sponsers-content">
                            <a href="#">
                                <img src="{{ asset('client/assets/img/Logo_Fipmo.png') }}" width="100" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('client/assets/img/dots_logo.jpg') }}" width="100" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('client/assets/img/vokasi_ub.png') }}" width="100" alt="">
                            </a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('client/assets/img/header/head7_bg.png') }}" alt="" class="head7_bg slide_up_down">
</header>
<!-- ====== end header ====== -->
<main>
    <!-- ====== start Keunggulan ====== -->
    <section class="features style-7 section-padding">
        <div class="container">
            <div class="section-head text-center style-4 mb-40">
                <div class="top-title mb-10">
                    <img src="{{ asset('client/assets/img/line_l.png') }}" alt="">
                    <h5> Keunggulan </h5>
                    <img src="{{ asset('client/assets/img/line_r.png') }}" alt="">
                </div>
                <h2 class="">
                    Apa yang akan Anda <br><span> Dapatkan??? </span>
                </h2>
            </div>
        </div>
        <div class="content">
            <div class="features-slider7">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="features-card style-7">
                                <div class="icon">
                                    <img src="{{ asset('client/assets/img/icons/fe1.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <p class="color-999"> Keunggulan 01 </p>
                                    <h5> Powerful Security <br> System Built </h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="features-card style-7">
                                <div class="icon">
                                    <img src="{{ asset('client/assets/img/icons/fe2.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <p class="color-999"> Keunggulan 02 </p>
                                    <h5> Easy Search Engine <br> Optimize </h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="features-card style-7">
                                <div class="icon">
                                    <img src="{{ asset('client/assets/img/icons/fe3.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <p class="color-999"> Keunggulan 03 </p>
                                    <h5> Uncommon Layout <br> & Creative </h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="features-card style-7">
                                <div class="icon">
                                    <img src="{{ asset('client/assets/img/icons/fe4.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <p class="color-999"> Keunggulan 04 </p>
                                    <h5> Save Time & Big <br> Data </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="btns text-center mt-10">-->
            <!--    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4 mb-4 mb-lg-0">-->
            <!--        <small> Learn More <i class="fas fa-long-arrow-alt-right"></i> </small>-->
            <!--    </a>-->
            <!--    <a href="#0" class="btn btn-icon-circle rounded-pill bg-white fw-bold me-4">-->
            <!--        <small> Purchase Now <i class="fas fa-long-arrow-alt-right bg-light"></i> </small>-->
            <!--    </a>-->
            <!--</div>-->
        </div>
        <img src="{{ asset('client/assets/img/feat_circle.png') }}" alt="" class="img-circle rotate-center">
    </section>
    <!-- ====== end Keunggulan ====== -->

    <!-- ====== start about ====== -->
    <section class="about style-7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="info">
                        <div class="section-head style-4 mb-40">
                            <div class="top-title mb-10">
                                <img src="{{ asset('client/assets/img/line_l.png') }}" alt="">
                                <h5> Tentang Kami </h5>
                            </div>
                            <h2 class="">
                              MEWUJUDKAN <span>DIGITALISASI</span> BISNIS ANDA.
                            </h2>
                        </div>
                        <div class="text mb-30">
                        Kami Hadir berdedikasi untuk menyediakan solusi teknologi canggih yang dirancang untuk mendorong bisnis Anda menuju masa depan yang lebih produktif dan efisien. Dengan keahlian mendalam dan inovasi yang berkelanjutan, kami membantu Anda mengatasi tantangan teknologi yang kompleks dan mencapai tujuan bisnis Anda. 
                        </div>
                        <ul>
                                <li class="d-flex mb-20"> 
                                    <i class="fas fa-check-circle color-blue7 me-2 mt-2"></i>
                                    <div class="text"> <strong class="color-000 me-2"> Visi: </strong></div>    
                                    <div class="text"> </strong>Menjadi penggerak industri teknologi yang memberdayakan generasi muda </div>    
                                    <!--<div class="text">Inovasi teknologi terdepan</div>    -->
                                </li>
                                 <li class="d-flex mb-20"> 
                                    <i class="fas fa-check-circle color-blue7 me-2 mt-2"></i>
                                    <div class="text"> <strong class="color-000 me-2"> Misi: </strong></div>    
                                    <div class="text"> </strong> Menyediakan layanan terbaik </div>    
                                    <!--<div class="text"> Automatically syncs across all your devices. You can also access... </div>    -->
                                </li>
                            </ul>
                        <!-- <ul>
                            <li class="d-flex mb-20">
                                <i class="fas fa-check-circle color-blue7 me-2 mt-2"></i>
                                <div class="text"> <strong class="color-000"> Product Quality: </strong> Automatically syncs across all your devices. You can also access... </div>
                            </li>
                            <li class="d-flex mb-20">
                                <i class="fas fa-check-circle color-blue7 me-2 mt-2"></i>
                                <div class="text"> <strong class="color-000"> On Demand Design: </strong> Images, videos, PDFs and audio files are supported. </div>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="img">
                        <img src="{{ asset('client/assets/img/about/about7.jpg') }}" alt="" class="main-img">
                        <img src="{{ asset('client/assets/img/about/about7_chart.png') }}" alt="" class="img-chart slide_up_down">
                        <span class="circle scale_up_down"></span>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('client/assets/img/about/about_s4_wave.png') }}" alt="" class="top-wave">
        <img src="{{ asset('client/assets/img/about/about_s4_wave.png') }}" alt="" class="bottom-wave">
        <img src="{{ asset('client/assets/img/about/about7_lines.png') }}" alt="" class="bg-lines">
    </section>
    <!-- ====== end about ====== -->

    <!-- ====== start services ====== -->
    <section class="services style-7 pt-100">
        <div class="container">
            <div class="section-head text-center style-4 mb-50">
                <div class="top-title mb-10">
                    <img src="{{ asset('client/assets/img/line_l.png') }}" alt="">
                    <h5> Layanan </h5>
                    <img src="{{ asset('client/assets/img/line_r.png') }}" alt="">
                </div>
                <h2 class="">
                    Apa yang Kami <span> Tawarkan </span> <br> Sebagai Perusahaan
                </h2>
            </div>
            <div class="services-content pb-100">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-item-style7">
                            <div class="img">
                                <img src="{{ asset('client/assets/img/icons/serv_icons/21.png') }}" alt="">
                                <span class="icon">
                                    <i class="fas fa-globe"></i>
                                </span>
                            </div>
                            <div class="info">
                                <h6> Konsultasi IT </h6>
                                <p class="text"> Tim konsultan IT kami bekerja sama dengan Anda untuk merancang dan mengimplementasikan strategi IT yang efektif dan inovatif, memastikan bahwa teknologi Anda selaras dengan tujuan bisnis Anda. </p>
                                <a href="#"> <i class="fa fa-long-arrow-right"></i> Read More  <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-item-style7">
                            <div class="img">
                                <img src="{{ asset('client/assets/img/icons/serv_icons/22.png') }}" alt="">
                                <span class="icon">
                                    <i class="fas fa-book"></i>
                                </span>
                            </div>
                            <div class="info">
                                <h6> Pengembangan Perangkat Pintar </h6>
                                <p class="text"> Kami turut menghadirkan solusi Smart Automated System berbasis Artificial Intelligent dan Internet of Things yang terhubung untuk berbagai keperluan. Dari perangkat pintar rumah hingga sistem pengendalian perangkat yang solutif untuk kebutuhan bisnis Anda. </p>
                                <a href="#"> <i class="fa fa-long-arrow-right"></i> Read More  <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-item-style7">
                            <div class="img">
                                <img src="{{ asset('client/assets/img/icons/serv_icons/23.png') }}" alt="">
                                <span class="icon">
                                    <i class="fas fa-bell"></i>
                                </span>
                            </div>
                            <div class="info">
                                <h6> Pengembangan Perangkat Lunak Kustom </h6>
                                <p class="text"> Kami menawarkan solusi perangkat lunak yang dirancang khusus untuk memenuhi kebutuhan spesifik bisnis Anda. Dari aplikasi mobile hingga sistem manajemen perusahaan, kami siap membantu Anda. </p>
                                <a href="#"> <i class="fa fa-long-arrow-right"></i> Read More  <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-item-style7">
                            <div class="img">
                                <img src="{{ asset('client/assets/img/icons/serv_icons/24.png') }}" alt="">
                                <span class="icon">
                                    <i class="fas fa-users"></i>
                                </span>
                            </div>
                            <div class="info">
                                <h6> Manajemen Proyek Teknologi </h6>
                                <p class="text"> Kami mengelola proyek teknologi dari awal hingga selesai, memberikan hasil yang tepat waktu dan sesuai anggaran. Fokus kami adalah pada kualitas, efisiensi, dan kepuasan pelanggan. </p>
                                <a href="#"> <i class="fa fa-long-arrow-right"></i> Read More  <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end services ====== -->

    <!-- ====== start projects  ====== -->
    <!-- <section class="projects style-7 section-padding">
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="section-head style-4 mb-50">
                        <div class="top-title mb-10">
                            <img src="{{ asset('client/assets/img/line_l.png') }}" alt="">
                            <h5> Case Study </h5>
                        </div>
                        <h2 class="">
                            Creative <span> Works </span> <br> We Done
                        </h2>
                    </div>
                    <div class="projects-tabs">
                        <ul class="nav nav-pills flex-column mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-proj1-tab" data-bs-toggle="pill" data-bs-target="#pills-proj1" type="button" role="tab" aria-controls="pills-proj1" aria-selected="true">
                                   <i class="fa fa-long-arrow-right me-2 color-blue7"></i> Website Design
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-proj2-tab" data-bs-toggle="pill" data-bs-target="#pills-proj2" type="button" role="tab" aria-controls="pills-proj2" aria-selected="false">
                                <i class="fa fa-long-arrow-right me-2 color-blue7"></i> UI UX Design
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-proj3-tab" data-bs-toggle="pill" data-bs-target="#pills-proj1" type="button" role="tab" aria-controls="pills-proj3" aria-selected="false">
                                    <i class="fa fa-long-arrow-right me-2 color-blue7"></i> Branding Design
                                </button>
                            </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-proj4-tab" data-bs-toggle="pill" data-bs-target="#pills-proj2" type="button" role="tab" aria-controls="pills-proj4" aria-selected="false">
                                    <i class="fa fa-long-arrow-right me-2 color-blue7"></i> Game Design
                                </button>
                            </li>
                        </ul>
                        <div class="swiper-button-next">
                            <i class="far fa-long-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="far fa-long-arrow-left"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-proj1" role="tabpanel" aria-labelledby="pills-proj1-tab">
                            <div class="projects-slider7">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="#" class="project-card style-7">
                                                <div class="info">
                                                    <h6> UI & UX, Website </h6>
                                                    <h3> Protogus Website UIX Design </h3>
                                                </div>
                                                <div class="img">
                                                    <img src="{{ asset('client/assets/img/projects/8.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="project-card style-7">
                                                <div class="info">
                                                    <h6> UI & UX, Website </h6>
                                                    <h3> Protogus Website UIX Design </h3>
                                                </div>
                                                <div class="img">
                                                    <img src="{{ asset('client/assets/img/projects/9.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="project-card style-7">
                                                <div class="info">
                                                    <h6> UI & UX, Website </h6>
                                                    <h3> Protogus Website UIX Design </h3>
                                                </div>
                                                <div class="img">
                                                    <img src="{{ asset('client/assets/img/projects/8.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="project-card style-7">
                                                <div class="info">
                                                    <h6> UI & UX, Website </h6>
                                                    <h3> Protogus Website UIX Design </h3>
                                                </div>
                                                <div class="img">
                                                    <img src="{{ asset('client/assets/img/projects/9.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-proj2" role="tabpanel" aria-labelledby="pills-proj2-tab">
                            <div class="projects-slider7">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="#" class="project-card style-7">
                                                <div class="info">
                                                    <h6> UI & UX, Website </h6>
                                                    <h3> Protogus Website UIX Design </h3>
                                                </div>
                                                <div class="img">
                                                    <img src="{{ asset('client/assets/img/projects/9.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="project-card style-7">
                                                <div class="info">
                                                    <h6> UI & UX, Website </h6>
                                                    <h3> Protogus Website UIX Design </h3>
                                                </div>
                                                <div class="img">
                                                    <img src="{{ asset('client/assets/img/projects/8.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="project-card style-7">
                                                <div class="info">
                                                    <h6> UI & UX, Website </h6>
                                                    <h3> Protogus Website UIX Design </h3>
                                                </div>
                                                <div class="img">
                                                    <img src="{{ asset('client/assets/img/projects/9.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="project-card style-7">
                                                <div class="info">
                                                    <h6> UI & UX, Website </h6>
                                                    <h3> Protogus Website UIX Design </h3>
                                                </div>
                                                <div class="img">
                                                    <img src="{{ asset('client/assets/img/projects/8.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#0" class="btn btn-icon-circle rounded-pill bg-white fw-bold mt-50">
                            <small> More Projects <i class="fas fa-long-arrow-alt-right bg-light"></i> </small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ====== end projects  ====== -->

    <!-- ====== start testimonials ====== -->
    <section class="testimonials style-7 section-padding">
        <div class="container">
            <div class="section-head text-center style-4 mb-80">
                <div class="top-title mb-10">
                    <img src="{{ asset('client/assets/img/line_l.png') }}" alt="">
                    <h5> Feedbacks </h5>
                    <img src="{{ asset('client/assets/img/line_r.png') }}" alt="">
                </div>
                <h2 class="">
                    1M+ Happy <span> Users Around </span> <br> From Worlds
                </h2>
            </div>
            <div class="testimonials-slider7 position-relative overflow-hidden">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="testi-card">
                                            <div class="text">
                                                “ It uses a directory of over 200 latin words combine a half of model sentence structures. All generations on the internet trends to repeat predefined chunks as nessessary to make this file. ”
                                            </div>
                                            <div class="author">
                                                <div class="img icon-60 rounded-circle overflow-hidden img-cover me-3 flex-shrink-0">
                                                    <img src="{{ asset('client/assets/img/testimonials/user7.png') }}" alt="">
                                                </div>
                                                <div class="inf">
                                                    <p> Head Of Idea </p>
                                                    <h6> Alonso D.Dowson </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="testi-card">
                                            <div class="text">
                                                “ It uses a directory of over 200 latin words combine a half of model sentence structures. All generations on the internet trends to repeat predefined chunks as nessessary to make this file. ”
                                            </div>
                                            <div class="author">
                                                <div class="img icon-60 rounded-circle overflow-hidden img-cover me-3 flex-shrink-0">
                                                    <img src="{{ asset('client/assets/img/testimonials/user3.jpeg') }}" alt="">
                                                </div>
                                                <div class="inf">
                                                    <p> Head Of Idea </p>
                                                    <h6> Alonso D.Dowson </h6>
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
            <div class="get-qoute-banner">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="info">
                            <p> Kapan saja Anda dapat mengajukan permintaan kepada kami </p>
                            <h6> Semua yang Anda Butuhkan Untuk Mengelola Bisnis </h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-none d-lg-block">
                        <div class="img">
                            <img src="{{ asset('client/assets/img/testimonials/banner7.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="btns text-lg-end">
                            <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white">
                                <small> Dapatkan Penawaran <i class="fas fa-long-arrow-alt-right"></i> </small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('client/assets/img/testimonials/testi7_back.png') }}" alt="" class="img_back slide_up_down">
        <img src="{{ asset('client/assets/img/testimonials/testi7_qout.png') }}" alt="" class="testi_qout">
    </section>
    <!-- ====== end testimonials ====== -->

    <!-- ====== start choose-us ====== -->
    <section class="choose-us style-7 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="img">
                        <img src="{{ asset('client/assets/img/choose_us/choose7.jpg') }}" alt="">
                        <a href="https://youtu.be/pGbIOC83-So?t=21" class="play_btn" data-lity>
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info">
                        <div class="section-head style-4 mb-40">
                            <div class="top-title mb-10">
                                <img src="{{ asset('client/assets/img/line_l.png') }}" alt="">
                                <h5> Why Choose Us </h5>
                            </div>
                            <h2 class="text-white">
                                Why Choose <span> Our WiYATA </span> IT Service?
                            </h2>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('client/assets/img/artificial-intelligence.gif') }}" alt="">
                                </div>
                                <div class="inf">
                                    <h6> Inovasi Terdepan </h6>
                                    <p> Berlatarbelakang anak muda yang melek teknologi, memastikan Anda mendapatkan solusi paling mutakhir </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('client/assets/img/presentation.gif') }}" alt="">
                                </div>
                                <div class="inf">
                                    <h6> Pendekatan Berpusat pada Klien </h6>
                                    <p> Kami bekerja sama dengan Anda untuk memahami kebutuhan unik bisnis Anda dan menyediakan solusi yang sesuai </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('client/assets/img/user.gif') }}" alt="">
                                </div>
                                <div class="inf">
                                    <h6> Tim Profesional </h6>
                                    <p> Tim kami terdiri dari para ahli di bidang teknologi dan jasa yang berdedikasi untuk memberikan hasil terbaik </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('client/assets/img/about/about_s4_wave.png') }}" alt="" class="top-wave">
        <img src="{{ asset('client/assets/img/about/about_s4_wave.png') }}" alt="" class="bottom-wave">
        <img src="{{ asset('client/assets/img/choose_us/choose7_circe.png') }}" alt="" class="choose-circle rotate-center">
    </section>
    <!-- ====== end choose-us ====== -->

    <!-- ====== start blog ====== -->
    <section class="blog style-7 section-padding">
        <div class="container">
            <div class="section-head text-center style-4 mb-80">
                <div class="top-title mb-10">
                    <img src="{{ asset('client/assets/img/line_l.png') }}" alt="">
                    <h5> blog </h5>
                    <img src="{{ asset('client/assets/img/line_r.png') }}" alt="">
                </div>
                <h2 class="">
                    Company <span> News & Insights </span>
                </h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-card style-7 mt-5 mt-lg-0">
                            <div class="img img-cover">
                                <img src="{{ asset('client/assets/img/blog/15.png') }}" alt="">
                            </div>
                            <div class="info pt-40">
                                <div class="date-tags">
                                    <div class="tags">
                                        <a href="page-blog-app.html">IT Solution</a>
                                    </div>
                                    <a href="#" class="date">
                                        Nov 21, 2023
                                    </a>
                                    <span class="color-999"> | </span>
                                    <a href="#" class="author color-999">
                                        By <span class="color-000 fw-bold"> Admin </span>
                                    </a>
                                </div>
                                <h4 class="title">
                                    <a href="page-single-post-app.html"> Create Live Segments & Target The Right People... </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-card style-7 mt-5 mt-lg-0">
                            <div class="img img-cover">
                                <img src="{{ asset('client/assets/img/blog/16.png') }}" alt="">
                            </div>
                            <div class="info pt-40">
                                <div class="date-tags">
                                    <div class="tags">
                                        <a href="page-blog-app.html">IT Solution</a>
                                    </div>
                                    <a href="#" class="date">
                                        Nov 21, 2023
                                    </a>
                                    <span class="color-999"> | </span>
                                    <a href="#" class="author color-999">
                                        By <span class="color-000 fw-bold"> Admin </span>
                                    </a>
                                </div>
                                <h4 class="title">
                                    <a href="page-single-post-app.html"> Through The Collaboration With Customers... </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-card style-7 mt-5 mt-lg-0">
                            <div class="img img-cover">
                                <img src="{{ asset('client/assets/img/blog/17.png') }}" alt="">
                            </div>
                            <div class="info pt-40">
                                <div class="date-tags">
                                    <div class="tags">
                                        <a href="page-blog-app.html">IT Solution</a>
                                    </div>
                                    <a href="#" class="date">
                                        Nov 21, 2023
                                    </a>
                                    <span class="color-999"> | </span>
                                    <a href="#" class="author color-999">
                                        By <span class="color-000 fw-bold"> Admin </span>
                                    </a>
                                </div>
                                <h4 class="title">
                                    <a href="page-single-post-app.html"> In Discussing Needs & Demand, We're Able To... </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('client/assets/img/shap_color_7.png') }}" alt="" class="shap_color">
    </section>
    <!-- ====== end blog ====== -->

    <!-- ====== start chat-banner ====== -->
    <section class="chat-banner style-7">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-3 col-sm-6 d-none d-lg-block">
                    <div class="img img1">
                        <img src="{{ asset('client/assets/img/vector1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="info">
                        <p> Hire Us For Your Project </p>
                        <h3> Lets Work Together </h3>
                        <div class="btns mt-50">
                            <a href="#0" class="btn btn-icon-circle rounded-pill bg-black fw-bold text-white me-4 mb-3 mb-lg-0">
                                <small> Estimate Project <i class="fas fa-long-arrow-alt-right"></i> </small>
                            </a>
                            <a href="#0" class="btn btn-icon-circle rounded-pill fw-bold brd-light text-white hover-blue7">
                                <small> Contact Us <i class="fas fa-long-arrow-alt-right bg-light"></i> </small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img img2">
                        <img src="{{ asset('client/assets/img/vector2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end chat-banner ====== -->
</main>
<!--End-Contents-->

@endsection
