
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/fav.png" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

        @include('layouts.client.style')
        <style>
        .swal2-container {
            z-index: 9999;
        }
        </style>
        @stack('style')
        <!-- SweetAlert 2 CSS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @stack('scripts')
</head>

<body>

    <!-- ====== start loading page ====== -->
     <!-- <div id="preloader">
    </div> -->
    <!-- ---------- loader ---------- -->
    <!--<div id="preloader">-->
    <!--    <div id="loading-wrapper" class="show">-->
    <!--        <div id="loading-text"> <img src="{{ asset('client/assets/img/logo_loading.png') }}" alt=""> </div>-->
    <!--        <div id="loading-content"></div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- ====== end loading page ====== -->

      <!-- ====== Header Start ====== -->
      @include('layouts.client.navbar')
      <!-- ====== Header End ====== -->


      @yield('content')

       <!-- ====== Footer Start ====== -->
       @include('layouts.client.footer')
       <!-- ====== Footer End ====== -->


  <!-- ====== All Javascript Files ====== -->
  @if (Session::has('success_message_logout'))
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
          icon: 'success',
          title: '{{ Session::get('success_message_logout') }}'
      });
  </script>
@endif

@if (Session::has('success_message'))
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
      icon: 'success',
      title: '{{ Session::get('success_message') }}'
  });
</script>
@endif

@if (Session::has('error_message_update_details'))
<script>
  Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: "{{ Session::get('error_message_update_details') }}",
      showConfirmButton: false,
      timer: 3000 // milliseconds
  });
</script>
@endif

@if (Session::has('error_message_not_found'))
<script>
  Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: "{{ Session::get('error_message_not_found') }}",
      showConfirmButton: false,
      timer: 3000 // milliseconds
  });
</script>
@endif

@if (Session::has('error_message_delete'))
<script>
  Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: "{{ Session::get('error_message_delete') }}",
      showConfirmButton: false,
      timer: 3000 // milliseconds
  });
</script>
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

@if (Session::has('success_message_create'))
<script>
  Swal.fire({
      icon: 'success',
      title: 'Berhasil',
      text: "{{ Session::get('success_message_create') }}",
      showConfirmButton: false,
      timer: 3000 // milliseconds
  });
</script>
@endif

@if (Session::has('success_message_update'))
<script>
  Swal.fire({
      icon: 'success',
      title: 'Berhasil',
      text: "{{ Session::get('success_message_update') }}",
      showConfirmButton: false,
      timer: 3000 // milliseconds
  });
</script>
@endif

@if (Session::has('success_message_delete'))
<script>
  Swal.fire({
      icon: 'success',
      title: 'Berhasil',
      text: "{{ Session::get('success_message_delete') }}",
      showConfirmButton: false,
      timer: 3000 // milliseconds
  });
</script>
@endif

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
@stack('script')
@include('layouts.client.script')

</body>

</html>
