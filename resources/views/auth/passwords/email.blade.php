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
                <h2>Bạn quên mật khẩu?</h2>
                <p>Nhập địa chỉ email của bạn dưới đây và chúng tôi sẽ gửi cho bạn một liên kết để đặt lại mật khẩu của bạn.</p>
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
                        <button type="submit" class="awe-btn awe-btn-13">Gửi</button>
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
