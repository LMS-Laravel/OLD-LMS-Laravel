@extends('auth::layouts.master')

@section('content')

    <div class="container">

        {!! Form::open(array('route' => 'auth.login', 'class' => 'cmxform form-signin', 'id' => 'loginForm')) !!}

            <div class="form-signin-heading text-center">
                <h1 class="sign-title">{{ trans('auth::ui.login.signin') }}</h1>
                <img src="themes/admin/images/login-logo.png" alt=""/>
            </div>
            <div class="login-wrap">
                <input type="text" class="form-control" name="email" placeholder={{ trans('auth::ui.login.email') }} autofocus>

                <input type="password" class="form-control" name="password" placeholder={{ trans('auth::ui.login.password') }}>

                <button class="btn btn-lg btn-login btn-block" type="submit">
                    <i class="fa fa-check"></i>
                </button>

                <label class="checkbox">
                    <input type="checkbox" value="remember-me" name="remember"> {{ trans('auth::ui.login.rememberme') }}
                </label>

                @include('errors.form_error')
            </div>
            {!! Form::close() !!}

    </div>

@stop