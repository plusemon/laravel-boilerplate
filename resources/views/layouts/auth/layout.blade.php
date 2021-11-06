<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> {{ $title ?? 'Admin Dashboard' }} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/dashboard/images/favicon.ico') }}">
    @include('layouts.dashboard.styles')
</head>

<body class="bg-pattern">
    <div class="bg-overlay"></div>
    @yield('main')
    @include('layouts.dashboard.scripts')
</body>

</html>
