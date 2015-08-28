@extends('layouts.master')

        @section('content')

        <!--body wrapper start-->
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{ trans('dashboard::ui.dash.data') }}
                        <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table  class="table table-hover">
                                <thead>
                                <tr>
                                    <th>{{ trans('dashboard::ui.dash.num_users') }}</th>
                                    <th>{{ trans('dashboard::ui.dash.num_roles') }}</th>
                                    <th>{{ trans('dashboard::ui.dash.num_permissions') }}</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td>{{ $data['num_users'] }}</td>
                                        <td>{{ $data['num_roles'] }}</td>
                                        <td>{{ $data['num_permissions'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
    @stop
