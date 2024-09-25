@extends('merchant.auth.master')

@section('title', 'Merchant | Login')

@section('content')
<ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab" href="#top-profile" role="tab"
            aria-controls="top-profile" aria-selected="true"><span class="icon-user me-2"></span>Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab"
            aria-controls="top-contact" aria-selected="false"><span class="icon-unlock me-2"></span>Register</a>
    </li>
</ul>
<div class="tab-content" id="top-tabContent">
    <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
        <form class="form-horizontal auth-form" action="{{ route('merchant.auth.login') }}" method="POST">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <input required name="email" type="email" class="form-control" placeholder="{{ __('Email') }}"
                    id="exampleInputEmail1" value="{{ old('email') }}">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <input required name="password" type="password" class="form-control" placeholder="Password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="form-terms">
                <div class="form-check mesm-2">
                    {{-- <input type="checkbox" class="form-check-input" id="customControlAutosizing" name="remember">
                    <label class="form-check-label ps-2" for="customControlAutosizing">{{ __('Remember me') }}</label>
                    --}}
                    <a href="javascript:void(0)" class="btn btn-default forgot-pass">Forgot Password!</a>
                </div>
            </div>
            <div class="form-button">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <div class="form-footer">
                <span>Or Login up with social platforms</span>
                <ul class="social">
                    <li><a class="ti-facebook" href="javascript:void(0)"></a></li>
                    <li><a class="ti-twitter" href="javascript:void(0)"></a></li>
                    <li><a class="ti-instagram" href="javascript:void(0)"></a></li>
                    <li><a class="ti-pinterest" href="javascript:void(0)"></a></li>
                </ul>
            </div>
        </form>
    </div>
    <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
        <form class="form-horizontal auth-form" method="POST" action="{{ route('merchant.auth.register') }}">
            @csrf

            {{--
            <!-- User Name -->
            <div class="form-group">
                <input required="" name="name" type="text" class="form-control" value="{{ old('name') }}"
                    placeholder="{{ __('Name') }}" id="exampleInputEmail12">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div> --}}

            <!-- Email Address -->
            <div class="form-group">
                <input required="" name="email" type="email" value="{{ old('email') }}" class="form-control"
                    placeholder="{{ __('Email') }}" id="exampleInputEmail12">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <input required="" name="password" type="password" class="form-control"
                    placeholder="{{ __('Password') }}">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <input required="" name="password_confirmation" type="password" class="form-control"
                    placeholder="{{ __('Confirm Password') }}">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="form-terms">
                <div class="form-check mesm-2">
                    <input type="checkbox" class="form-check-input" id="customControlAutosizing1">
                    <label class="form-check-label ps-2" for="customControlAutosizing1"><span>I agree all statements in
                            <a href="" class="pull-right">Terms &amp;
                                Conditions</a></span></label>
                </div>
            </div>
            <div class="form-button">
                <button class="btn btn-primary" type="submit">{{ __('Register') }}</button>
            </div>
            <div class="form-footer">
                <span>Or Sign up with social platforms</span>
                <ul class="social">
                    <li><a class="ti-facebook" href="javascript:void(0)"></a></li>
                    <li><a class="ti-twitter" href="javascript:void(0)"></a></li>
                    <li><a class="ti-instagram" href="javascript:void(0)"></a></li>
                    <li><a class="ti-pinterest" href="javascript:void(0)"></a></li>
                </ul>
            </div>
        </form>
    </div>

</div>

@endsection