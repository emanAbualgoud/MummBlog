@extends('admin.auth.master')

@section('title')
    Admin Login
@endsection

@section('content')
    <div class="m-login__container">
        <div class="m-login__logo">
            <a href="#">
                <img src="{{ URL::asset('public/web/images/logo-black.png') }}" alt="Dashboard">
            </a>
        </div>
        <div class="m-login__signin">
            <div class="m-login__head">
                <h3 class="m-login__title">
                    Sign In To Dashboard
                </h3>
            </div>

            <form class="m-login__form m-form" action="{{ route('login') }}" method="post">
                @csrf
                @include('admin.layouts.alerts')

                <div class="form-group m-form__group">
                    <input class="form-control m-input" type="email" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off">
                </div>

                <div class="form-group m-form__group">
                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                </div>

                <div class="row m-login__form-sub">
                    <div class="col m--align-left m-login__form-left">
                        <label class="m-checkbox  m-checkbox--focus">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            Remember me
                            <span></span>
                        </label>
                    </div>
                    {{--<div class="col m--align-right m-login__form-right">--}}
                        {{--<a href="javascript:;" id="m_login_forget_password" class="m-link">--}}
                            {{--Forget Password ?--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
                <div class="m-login__form-action">
                    <button id="" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary" type="submit">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
