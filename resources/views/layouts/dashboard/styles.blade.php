{{-- All About stylesheet link here --}}


<!-- Bootstrap Css -->
<link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('assets/dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('assets/dashboard/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

<!-- toastr-->
<link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />


{{-- for custom css / page css --}}
@stack('css')
