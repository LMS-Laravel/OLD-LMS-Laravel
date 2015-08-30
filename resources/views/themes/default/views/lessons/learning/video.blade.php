@extends('themes/default/views/layouts/layout')
@section('content')
<!-- Courses Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-globe"></i>Bienvenido a la clase <strong>{{ $lesson->title }}</strong>
            <br>
            <small>Curso: {{ $lesson->module->course->name }}</small>
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li><a href="{{ route('dashboard.learning') }}">Cursos</a></li>
    <li><a href="{{ route('learning.course.show', $lesson->module->course->id) }}">{{ $lesson->module->course->name }}</a></li>
    <li>{{ $lesson->title }}</li>
</ul>
<!-- END Courses Header -->

<!-- Main Row -->
<div class="row">
    <div class="col-md-8">
        <!-- Course Widget -->
        <div class="widget">
            <div class="widget-advanced">
                <!-- Widget Header -->
                <div class="widget-header text-center themed-background-dark">
                    <div class="widget-options">
                        <button class="btn btn-xs btn-default" data-toggle="tooltip" title="Favorito!"><i class="fa fa-heart text-danger"></i></button>
                    </div>
                    <h3 class="widget-content-light">
                        {{ $lesson->title }}<br>
                        <small>Profesor: {{ $lesson->teacher->full_name }}</small>
                    </h3>
                </div>
                <!-- END Widget Header -->

                <!-- Widget Main -->
                <div class="widget-main">
                    <a href="javascript:void(0)" class="widget-image-container animation-fadeIn">
                        <span class="widget-icon themed-background"><i class="fa fa-bank"></i></span>
                    </a>
                    <!-- <a href="{{ route('learning.course.show', $lesson->module->course->id) }}" class="btn btn-sm btn-default pull-right">Ir al curso <i class="fa fa-chevron-right"></i></a> -->
                    <a href="{{ route('learning.course.show', $lesson->module->course->id) }}" class="btn btn-sm btn-default"><i class="fa fa-chevron-left"></i> Ir al curso</a>
                    <hr>
                    <!-- Lesson Content -->
                    <h3 class="sub-header">{{ $lesson->title }}</h3>
                    <div class="videoWrapper">
                        <iframe
                            width="100%"
                            height="315"
                            src="//www.youtube.com/embed/{{$video}}"
                            frameborder="0" allowfullscreen
                        >
                        </iframe>
                        <hr/>
                    </div>
                    <br/>
                    <br/>
                    {{ $lesson->content }}

                    <!-- END Lesson Content -->
                    <hr>
                    <h3 class="sub-header">Comentarios</h3>
                    <!-- Comments -->
                    <ul class="media-list push">
                        <li class="media">
                           @foreach($lesson->comments as $comment)
                           <li class="media">
                               <a href="{{ route('profile', $comment->user->id) }}" class="pull-left">
                                   <img src="{{ Gravatar::src($comment->user->email) }}" alt="Avatar" class="img-circle">
                               </a>
                               <div class="media-body">
                                   <a href="{{ route('profile', $comment->user->id) }}"><strong>{{ $comment->user->full_name }}</strong></a>
                                   <span class="text-muted"><small><em>{{ $comment->difference_hour }}</em></small></span>
                                   <p>{{ $comment->comment }}</p>
                               </div>
                           </li>
                           @endforeach
                            <div class="media-body">
                                <form action="{{ route('new_comment_class') }}" method="post">
                                    {{ Form::hidden('user_id', $user->id) }}
                                    {{ Form::hidden('class_id', $lesson->id) }}
                                    <textarea id="comment" name="comment" class="form-control" rows="2" placeholder="Tu comentario"></textarea>
                                    <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Comentar</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- END Widget Main -->
            </div>
        </div>
        <!-- END Course Widget -->
    </div>
    <div class="col-md-4">
        <!-- About Block -->
        <div class="block">
            <!-- About Content -->
            <div class="block-section">
                <a target="_blank" href="{{ $lesson->download }}" class="btn btn-lg btn-default btn-block"><i class="fa fa-download"></i> Descargar archivos</a>
            </div>
            <!-- END About Content -->
        </div>
        <!-- END About Block -->

        @include('themes/default/views/layouts/widget/account')

        @include('themes/default/views/layouts/widget/courses')
    </div>
</div>
<!-- END Main Row -->
@stop
