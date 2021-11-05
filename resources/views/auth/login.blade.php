@extends('layouts.auth.layout', ['title' => 'Login'])

@section('main')
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="">
                                <div class="text-center">
                                    <a href="{{ url('/') }}" class="">
                                        <img src="{{ asset('assets/dashboard/images/logo-dark.png') }}" alt="" height="24"
                                             class="auth-logo logo-dark mx-auto">
                                        <img src="{{ asset('assets/dashboard/images/logo-light.png') }}" alt="" height="24"
                                             class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                                <!-- end row -->
                                <h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
                                <p class="mb-5 text-center">Sign in to continue to {{ env('APP_NAME') }}.</p>
                                <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="username">Username</label>
                                                <input type="text" name="email" class="form-control" id="username" placeholder="Enter username">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <input type="password" name="password" class="form-control" id="userpassword"
                                                       placeholder="Enter password">
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" name="remember" class="form-check-input" id="customControlInline">
                                                        <label class="form-label" class="form-check-label"
                                                               for="customControlInline">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="text-md-end mt-3 mt-md-0">
                                                        <a href="auth-recoverpw.html" class="text-muted"><i
                                                               class="mdi mdi-lock"></i> Forgot your password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p class="text-white-50">Don't have an account ? <a href="{{ route('register') }}" class="fw-medium text-primary">
                                Register </a> </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection
