@extends('themes/default/views/layouts/layout')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('platform/js/syntax/styles/shCoreDjango.css') }}"/>
@stop

@section('content')
<!-- Courses Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-globe"></i>{{ trans('course::lesson/show.messages.welcome') }} <strong>{{ $lesson->title }}</strong>
            <br>
            <small>{{ trans('course::lesson/show.messages.course') }}: {{ $lesson->module->course->name }}</small>
        </h1>
    </div>
</div>
{!! Breadcrumbs::render('lesson_learning', $lesson->module->course, $lesson) !!}
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
                        <button class="btn btn-xs btn-default" data-toggle="tooltip" title="{{ trans('course::lesson/show.btn.favorite') }}"><i class="fa fa-heart text-danger"></i></button>
                    </div>
                    <h3 class="widget-content-light">
                        {{ $lesson->title }}<br>
                        <small>{{ trans('course::lesson/show.messages.teacher') }}: {{ $lesson->teacher->full_name }}</small>
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

                    {{ $lesson->content }}

                    <!-- END Lesson Content -->
                    <hr>
                    <h3 class="sub-header">{{ trans('course::lesson/show.messages.comments') }}</h3>
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
                                {!! Form::open(['route'=>'learning.comment.store', 'method'=>'POST' ]) !!}
                                    {!! Form::hidden('user_id', Auth::user()->id) !!}
                                    {!! Form::hidden('lesson_id', $lesson->id)  !!}
                                    <textarea id="comment" name="comment" class="form-control" rows="2" placeholder="{{ trans('course::lesson/show.textbox.comment') }}"></textarea>
                                    <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> {{ trans('course::lesson/show.btn.comment') }}</button>
                                {!! Form::close() !!}
                            </div>
                        </li>
                    </ul>
                    <!-- END Comments -->
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
                <a href="javascript:void(0)" class="btn btn-lg btn-default btn-block"><i class="fa fa-download"></i> {{ trans('course::lesson/show.btn.download') }}</a>
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

@section('scripts')
    <script type="text/javascript" src="{{ asset('platform/js/syntax/scripts/shCore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('platform/js/syntax/scripts/shBrushPhp.js') }}"></script>
    <script type="text/javascript">SyntaxHighlighter.all();</script>
@stop