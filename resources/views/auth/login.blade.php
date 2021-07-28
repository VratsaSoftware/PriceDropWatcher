@extends('layouts.form')
@section('content')
    <x-navigation/>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div class="text-center p-t-20 p-b-20">
                    <span class="db">LOGIN FORM</span>
                </div>
                <!-- Form -->
                <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row p-b-30">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                                    class="ti-user"></i></span>
                                </div>
                                <input id="email" type="email"
                                       class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}" placeholder="User email"
                                       aria-label="User email" aria-describedby="basic-addon1" required
                                       autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                                            class="ti-pencil"></i></span>
                        </div>
                        <input id="password" type="password"
                               class="form-control form-control-lg @error('password') is-invalid @enderror"
                               name="password" placeholder="Password" aria-label="Password"
                               aria-describedby="basic-addon1"
                               required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="p-t-20">
                                    <button type="submit" class="btn btn-success float-right">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <button class="btn btn-info" id="to-recover" type="button"><i
                                                class="fa fa-lock m-r-5"></i>
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
