@extends('themes/default/views/layouts/base_auth')

@section('content')
        <!-- Register Container -->
<div id="login-container" class="animation-fadeIn">
    <!-- Register Title -->
    <div class="login-title text-center">
        <h1>
            <i class="gi gi-keys"></i> <strong>{{ $data['name'] }}</strong>
            <br>
            @trans('user::ui.common.message-auth')
        </h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <!-- END Register Title -->

    <!-- Register Block -->
    <div class="block push-bit">
        <!-- Register Form -->
        {!! Form::open(['route' => 'auth.reset.password.postReset', 'id'=>'form-register', 'method' => 'POST', 'class' => 'form-horizontal form-bordered form-control-borderless']) !!}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                    <input type="email" id="email" name="email" required class="form-control input-lg" placeholder="@trans('user::ui.common.email')">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                    <input type="password" id="password" required name="password" class="form-control input-lg" placeholder="@trans('user::ui.common.password')">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                    <input type="password" id="password_confirmation" required name="password_confirmation" class="form-control input-lg" placeholder="@trans('user::ui.common.vpassword')">
                </div>
            </div>
        </div>
        <div class="form-group form-actions">
            <div class="col-xs-12 text-right">
                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> @trans('user::ui.reset.btn-change')</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12 text-center">
                <small>@trans('user::ui.common.btn-register-question')</small> <a href="@route('auth.loginGet')" id="link-register"><small>@trans('user::ui.common.btn-login')</small></a>
            </div>
        </div>
        {!! Form::close() !!}
                <!-- END Register Form -->
    </div>
    <!-- END Login Block -->
</div>
<!-- END Login Container -->

@stop