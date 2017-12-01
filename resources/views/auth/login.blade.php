@extends('hotel.layouts.app')

@section('title')
    Đăng nhập
@endsection

@section('content')
    <!-- ACCOUNT -->
    <section class="section-account parallax bg-11">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="login-register">
                <div class="text text-center">
                    <h2>LOGIN ACCOUNT</h2>
                    <p>Customer has been register</p>
                    <form action="{{ route('login') }}" method="POST" class="account_form">
                        {{ csrf_field() }}
                        <div class="field-form">
                            <input type="text" name="email" class="field-text" placeholder="Email"
                                   value="{{ old('email') }}" autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="field-form">
                            <input type="password" name="password" class="field-text" placeholder="Password">
                            <span class="view-pass"><i class="lotus-icon-view"></i></span>
                            @if ($errors->has('password'))
                                <span class="text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="field-form">
                            <label style="color: white">
                                <input type="checkbox" name="remember" class="field-checkbox" {{ old
                            ('remember') ?
                            'checked' : '' }}> Remember me
                            </label>
                        </div>
                        <div class="field-form field-submit">
                            <button type="submit" class="awe-btn awe-btn-13">Login</button>
                        </div>
                        <span class="account-desc">
                        <a href="{{ route('register') }}">Register now!</a>  -
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </span>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END / ACCOUNT -->
@endsection
