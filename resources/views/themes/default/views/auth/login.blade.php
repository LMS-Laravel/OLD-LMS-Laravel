@extends('themes/default/views/layouts/base_auth')

@section('content')
        <!-- Login Container -->
<div id="login-container" class="animation-fadeIn">
    <!-- Login Title -->
    <div class="login-title text-center">
        <h1>
            <i class="gi gi-keys"></i> <strong>{{ $data['name'] }}</strong>
            <br>
            @trans('user::ui.common.message-auth')
        </h1>
        @include('themes/default/views/errors/form_error')
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block push-bit">
        <!-- Login Form -->
        {!! Form::open(['route' => 'auth.login', 'id'=>'form-login', 'method' => 'POST', 'class' => 'form-horizontal form-bordered form-control-borderless']) !!}
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                    <input type="text" id="username" name="username" class="form-control input-lg" placeholder="{{ trans('user::ui.login.username') }}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                    <input type="password" id="password" name="password" class="form-control input-lg" placeholder="{{ trans('user::ui.login.password') }}" required>
                </div>
            </div>
        </div>
        <div class="form-group form-actions">
            <div class="col-xs-4">
                <label class="switch switch-primary" data-toggle="tooltip" title="{{ trans('user::ui.login.btn-remember') }}">
                    <input type="checkbox" id="remember" name="remember" checked>
                    <span></span>
                </label>
            </div>
            <div class="col-xs-8 text-right">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> {{ trans('user::ui.common.btn-login') }}</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12 text-center">
                <a href="@route('auth.reset.password.getReset')" id="link-reminder-login"><small>{{ trans('user::ui.common.btn-lost-password') }}</small></a> -
                <a href="@route('auth.get.register')" id="link-register-login"><small>{{ trans('user::ui.login.btn-new-account') }}</small></a>
            </div>
        </div>
        {!! Form::close() !!}
                <!-- END Login Form -->
    </div>
    <!-- END Login Block -->
</div>
<!-- END Login Container -->
@stop