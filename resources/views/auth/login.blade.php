
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
    <!-- End Google Tag Manager -->
    <title>Logdy - Login and Register Form HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('client/assets/css/lib/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/fonts/fontawesome.scss') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('client/assets/css/icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/tabler-icons.css') }}" />

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('client/assets/css/login.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('client/assets/css/login-default.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')

</head>
<body id="top" class="login-22-bodycolor">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 22 start -->
<div class="login-22">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-section">
                    <div class="form-inner">
                        <div class="logo-2">
                            {{-- <a href="login-22.html">
                                <img src="{{ asset('client/assets/img/wiyatawarna.png') }}" alt="logo">
                            </a> --}}
                        </div>
                        <div class="details">
                            <img src="{{ asset('client/assets/img/wiyatawarna.png') }}" style="margin-bottom: 20px;" width="140px;" alt="">
                            <h3>Sign Into Your Account</h3>
                            <form  action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group form-box">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                </div>
                                <div class="form-group form-box">
                                    <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                                </div>
                                <div class="form-group clearfix">
                                    <button type="submit" class="btn-md btn-theme w-100">Login</button>
                                </div>
                                <div class="clearfix"></div>
                                <div class="social-list">
                                    <span>Or Login With</span>
                                    <a href="#">
                                       <img src="{{ asset('client/assets/img/logo-google.png') }}" width="40px;" alt="">
                                    </a>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                        <p>Don't have an account? <a href="register-22.html" class="thembo"> Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 22 end -->

<!-- Ripple background start -->
<div class="ripple-background">
    <div class="circle xxlarge shade1"></div>
    <div class="circle xlarge shade2"></div>
    <div class="circle large shade3"></div>
    <div class="circle mediun shade4"></div>
    <div class="circle small shade5"></div>
</div>
<!-- Ripple background end -->
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
        });

        Toast.fire({
            icon: 'error',
            title: 'Error!',
            html: '{{ $error }}'
        });
    </script>
@endforeach
@endif

@if (Session::has('error_message'))
<script>
Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: "{{ Session::get('error_message') }}",
    showConfirmButton: false,
    timer: 3000 // milliseconds
});
</script>
@endif
<!-- External JS libraries -->
@include('layouts.client.script')
<!-- Custom JS Script -->
</body>
</html>
