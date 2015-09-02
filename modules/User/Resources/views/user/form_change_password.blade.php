@extends('layouts.master')

@section('content')
    <section class="wrapper">
        @include('partials.message')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ trans('auth::ui.user.change_password') }}</div>
                        <div class="panel-body">
                            @include('errors.form_error')

                            {!! Form::open(array('url' => 'auth/user/change-password', 'class' => 'cmxform form-horizontal', 'id' => 'nameForm')) !!}

                            <div class="form-group">
                                <label  class="col-lg-2 col-sm-2 control-label">{{ trans('auth::ui.user.password_new') }}</label>
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
                                <div class="col-lg-offset-2 col-lg-8">

                                    {!! Form::submit(trans('auth::ui.user.button_update'), ['class' => 'btn btn-primary']) !!}

                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('js/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/validation/validation-init.js') }}"></script>
@stop
