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
        @include('themes/default/views/errors/form_error')
    </div>
    <!-- END Register Title -->

    <!-- Register Block -->
    <div class="block push-bit">
        <!-- Reminder Form -->
        {!! Form::open(['route' => 'auth.reset.password.postEmail', 'id'=>'form-register', 'method' => 'POST', 'class' => 'form-horizontal form-bordered form-control-borderless'])  !!}
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                    <input type="email" id="email" name="email" required class="form-control input-lg" placeholder="@trans('user::ui.common.email')">
                </div>
            </div>
        </div>
        <div class="form-group form-actions">
            <div class="col-xs-12 text-right">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> @trans('user::ui.reset.btn-reset')</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12 text-center">
                <small>@trans('user::ui.common.btn-register-question')</small> <a href="@route('auth.loginGet')" id="link-register"><small>@trans('user::ui.common.btn-login')</small></a>
            </div>
        </div>
        {!!  Form::close()  !!}
                <!-- END Reminder Form -->

    </div>
    <!-- END Login Block -->
</div>
<!-- END Login Container -->

@stop