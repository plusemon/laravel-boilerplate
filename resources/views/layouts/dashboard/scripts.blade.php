{{-- All About Javascript link here --}}

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/dashboard/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/libs/node-waves/waves.min.js') }}"></script>

<script src="{{ asset('assets/dashboard/js/app.js') }}"></script>

<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<!-- Toastr Scripts render -->
{!! Notify::message() !!}

{{-- for custom scripts / page js --}}
@method('js')
