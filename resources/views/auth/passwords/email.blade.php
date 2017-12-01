@extends('hotel.layouts.app')

@section('title')
    Quên mật khẩu
@endsection

@section('content')
<!-- ACCOUNT -->
<section class="section-account parallax bg-11">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register">
            <div class="text text-center">
                <h2>You has been forgot password?</h2>
                <p>Enter your email address below and we will send you a link to reset your password.</p>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}" class="account_form">
                    {{ csrf_field() }}
                    <div class="field-form">
                        <input type="text" name="email" class="field-text" placeholder="Email" value="{{ old('email') }}" autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="field-form field-submit">
                        <button type="submit" class="awe-btn awe-btn-13">Send</button>
                    </div>
                <span class="account-desc">
                    <a href="{{ url('/') }}">Back to home page!</a>
                </span>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END / ACCOUNT -->
@endsection
