@extends('hotel.layouts.app')

@section('title')
    Khôi phục mật khẩu
@endsection

@section('content')
<!-- ACCOUNT -->
<section class="section-account parallax bg-11">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register">
            <div class="text text-center">
                <h2>Khôi phục mật khẩu!</h2>
                <p></p>
                <form method="POST" action="{{ route('password.request') }}" class="account_form">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <!-- Email -->
                    <div class="field-form">
                        <input type="text" name="email" class="field-text" placeholder="Email *" value="{{ $email or old('email') }}" autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- Password -->
                    <div class="field-form">
                        <input type="password" class="field-text" name="password" value="{{ old('password') }}" placeholder="Mật khẩu *">
                        @if ($errors->has('password'))
                            <span class="text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- Confirm Password -->
                    <div class="field-form">
                        <input type="password" class="field-text" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Nhập lại mật khẩu *">
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="field-form field-submit">
                        <button type="submit" class="awe-btn awe-btn-13">Đặt lại</button>
                    </div>
                <span class="account-desc">
                    <a href="{{ url('/') }}">Quay lại trang chủ!</a>
                </span>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END / ACCOUNT -->
@endsection
