@extends('hotel.layouts.app')

@section('title')
    Đăng ký
@endsection

@section('content')
<!-- ACCOUNT -->
<section class="section-account parallax bg-11">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register">
            <div class="text text-center">
                <h2>REGISTER FORM</h2>
                <p>Create new account</p>
                <form method="POST" action="{{ route('register') }}" class="account_form">
                    {{ csrf_field() }}
                    <!-- First Name -->
                    <div class="field-form">
                        <input type="text" class="field-text" name="first_name" value="{{ old('first_name') }}"
                               placeholder="First Name *" autofocus>
                        @if ($errors->has('first_name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- Last Name -->
                    <div class="field-form">
                        <input type="text" class="field-text" name="last_name" value="{{ old('last_name') }}"
                               placeholder="Last Name *">
                        @if ($errors->has('last_name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- Email -->
                    <div class="field-form">
                        <input type="text" class="field-text" name="email" value="{{ old('email') }}" placeholder="Email *">
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- Password -->
                    <div class="field-form">
                        <input type="password" class="field-text" name="password" value="{{ old('password') }}"
                               placeholder="Password *">
                        @if ($errors->has('password'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- Confirm Password -->
                    <div class="field-form">
                        <input type="password" class="field-text" name="password_confirmation" value="{{ old
                        ('password_confirmation') }}" placeholder="Confirm password *">
                    </div>
                    <!-- Phone -->
                    <div class="field-form">
                        <input type="text" class="field-text" name="phone_number" value="{{ old('phone_number') }}"
                               placeholder="Phone">
                        @if ($errors->has('phone_number'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- Address -->
                    <div class="field-form">
                        <input type="text" class="field-text" name="address" value="{{ old('address') }}"
                               placeholder="Address">
                        @if ($errors->has('address'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="field-form field-submit">
                        <button type="submit" class="awe-btn awe-btn-13">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END / ACCOUNT -->
@endsection
