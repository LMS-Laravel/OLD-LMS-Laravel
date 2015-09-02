@extends('layouts.master')

@section('style')
    <link href="{{ asset('themes/admin/js/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/admin/js/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('themes/admin/js/data-tables/DT_bootstrap.css') }}" />
    @stop

@section('content')

    <!--body wrapper start-->
    <div class="wrapper">
        @include('partials.message')
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{ trans('auth::ui.role.names') }}
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            @if(Auth::user()->can('create-roles'))
                            <a href="{{ url('auth/role/create') }}"><button class="btn btn-primary" type="button"><i class="fa fa-plus-circle"></i> {{ trans("auth::ui.role.button_add") }}</button></a>
                            @endif
                            <table  class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>{{ trans('auth::ui.role.name_label') }}</th>
                                    <th>{{ trans('auth::ui.role.display') }}</th>
                                    <th>{{ trans('auth::ui.role.description') }}</th>
                                    <th>{{ trans('auth::ui.permission.names') }}</th>
                                    @if(Auth::user()->can(['update-roles', 'delete-roles']))
                                    <th>{{ trans('auth::ui.role.operation_label') }}</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)

                                    <tr class="gradeX">
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->display_name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td><ul>
                                                @foreach($role->permissions as $permission)
                                                <li>
                                                    {{ $permission->display_name }}
                                                </li>
                                                @endforeach
                                            </ul></td>
                                        @if(Auth::user()->can(['update-roles', 'delete-roles']))
                                        <td>
                                            <p>
                                                @if(Auth::user()->can('update-roles'))
                                            <a href="{{ url('auth/role/' . $role->id . '/edit') }}">
                                                <button class="btn btn-info " type="button"><i class="fa fa-refresh"></i> {{ trans('auth::ui.role.button_update') }}</button>
                                            </a>
                                                @endif

                                                    @if(Auth::user()->can('delete-roles'))
                                            {!! Form::open(['url' => 'auth/role/'. $role->id, 'method' => 'delete']) !!}
                                            <button class="btn btn-danger " type="submit"><i class="fa fa-times-circle"></i> {{ trans('auth::ui.role.button_delete') }}</button>
                                            {!! Form::close() !!}
                                                    @endif
                                            </p>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{ trans('auth::ui.role.name_label') }}</th>
                                    <th>{{ trans('auth::ui.role.display') }}</th>
                                    <th>{{ trans('auth::ui.role.description') }}</th>
                                    <th>{{ trans('auth::ui.permission.names') }}</th>
                                    @if(Auth::user()->can(['update-roles', 'delete-roles']))
                                        <th>{{ trans('auth::ui.role.operation_label') }}</th>
                                    @endif
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop

@section('script')
            <!--dynamic table-->
    <script type="text/javascript" language="javascript" src="{{ asset('themes/admin/js/advanced-datatable/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/admin/js/data-tables/DT_bootstrap.js') }}"></script>
    <!--dynamic table initialization -->
    <script src="{{ asset('themes/admin/js/dynamic_table_init.js') }}"></script>
@stop