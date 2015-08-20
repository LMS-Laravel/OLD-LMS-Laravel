<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('auth::ui.user.firstname') }}</label>
    <div class="col-lg-8">

        {!! Form::text('firstname', null, ['class' => 'form-control']) !!}

    </div>
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('auth::ui.user.lastname') }}</label>
    <div class="col-lg-8">

        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}

    </div>
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('auth::ui.user.username') }}</label>
    <div class="col-lg-8">

        {!! Form::text('username', null, ['class' => 'form-control']) !!}

    </div>
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('auth::ui.user.email') }}</label>
    <div class="col-lg-8">

        {!! Form::text('email', null, ['class' => 'form-control']) !!}

    </div>
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('auth::ui.user.password') }}</label>
    <div class="col-lg-8">

        {!! Form::password('password', ['class' => 'form-control']) !!}

    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 col-sm-2 control-label">{{ trans('auth::ui.user.password_confirmation') }}</label>
    <div class="col-lg-8">

        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

    </div>
</div>

<div class="form-group">
    <label  class="col-lg-2 col-sm-2 control-label">{{ trans('auth::ui.role.names') }}</label>
    <div class="col-lg-10">

    {!! Form::select('role_id[]', $roles, isset($roles_user) ? $roles_user : null, array(
    'multiple' => true, 'class' => 'multi-select', 'id' => 'roleSelect')) !!}

    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-8">

        {!! Form::submit($button, ['class' => 'btn btn-primary']) !!}

    </div>
</div>