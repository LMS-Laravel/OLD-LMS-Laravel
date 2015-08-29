@extends('themes/default/views/layouts/layout')

@section('content')
<!-- Courses Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-globe"></i>Bienvenido al curso <strong>{{ $course->name }}</strong>
            <br/>
            <small>{{ $course->description }}</small>
            <br>
            <small>{{ count($modules) }} Modulos</small>
            <br/>
            {!! Alert::render() !!}
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li><a href="{{ route('dashboard.learning') }}">Cursos</a></li>
    <li>{{ $course->name }}</li>
</ul>
<!-- END Courses Header -->

<!-- Main Row -->
<div class="row">
    <div class="col-md-8">
        <!-- Course Widget -->
        <?php
            $colors = ['default','fire', 'flatie']
        ?>
        <div class="widget">
            <div class="widget-advanced">
                <!-- Widget Header -->
                <div class="widget-header text-center themed-background-dark">
                    <div class="widget-options">
                        <button class="btn btn-xs btn-default" data-toggle="tooltip" title="Favorito!"><i class="fa fa-heart text-danger"></i></button>
                    </div>
                    <h3 class="widget-content-light">
                        {{ $course->name }}
                        <br>
                        <small>Responsable: <a href="#">{{ $course->teacher->full_name }}</a></small>
                    </h3>
                </div>
                <!-- END Widget Header -->

                <!-- Widget Main -->
                <div class="widget-main">
                    <a href="javascript:void(0)" class="widget-image-container animation-fadeIn">
                        <span class="widget-icon themed-background-dark-{{ $colors[$course->level - 1] }}"><i class="fa fa-code"></i></span>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">
                        {{ count($modules) }} Modulos
                    </a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-success">
                    {{$course->value_current}}
                    </a>
                    <hr>
                    <!-- Lessons -->
                    @foreach($modules as $module)
                    <table class="table table-vcenter">
                        <thead>
                            <tr class="active">
                                <th><i class="gi gi-package"></i> {{ $module->name }}</th>
                                <th></th>
                                <!-- <th class="text-right"><small><em>1 hour</em></small></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($module->classes_active as $class)
                            <tr>
                                <td><a href="{{ route('view_class_get', $class->id) }}"><i class="fa fa-ellipsis-h"></i>  {{ $class->title }}</a></td>
                                <td class="text-right">
                                    @if($class->view == true)
                                    <a class="btn btn-xs btn-info"  data-toggle="tooltip" title="Ya la viste" href="#"><i class="fa fa-check"></i></a>
                                    @endif
                                    <a class="btn btn-xs btn-success" href="{{ route('view_class_get', $class->id) }}">
                                        @if($class->type == 1)
                                        <i class="fa fa-youtube-play"  data-toggle="tooltip" title="Es video"></i>
                                        @else
                                        <i class="fa fa-book"  data-toggle="tooltip" title="Es Nota"></i>
                                        @endif
                                    </a>
                                </td>
                                <!-- <td class="text-right"><a href="#" class="btn btn-xs btn-success" data-toggle="tooltip" title="Done!"><i class="fa fa-check"></i></a></td>-->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endforeach
                    <!-- END Lessons -->
                </div>
                <!-- END Widget Main -->
            </div>
        </div>
        <!-- END Course Widget -->
    </div>
    <div class="col-md-4">
        @include('themes/default/views/layouts/widget/share')

        @include('themes/default/views/layouts/widget/account')

        @include('themes/default/views/layouts/widget/courses')
    </div>
</div>
<!-- END Main Row -->

@stop