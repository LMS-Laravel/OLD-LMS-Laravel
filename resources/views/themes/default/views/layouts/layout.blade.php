<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>{{ $data['name'] }}</title>

        <meta name="description" content="{{ $data['description'] }}">
        <meta name="author" content="Angel Kurten">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <!-- <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">-->
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{ asset('platform/css/bootstrap.min.css') }}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{ asset('platform/css/plugins.css') }}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{ asset('platform/css/main.css') }}">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{ asset('platform/css/themes.css') }}">
        <!-- END Stylesheets -->

        @yield('css')

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="{{ asset('platform/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js') }}"></script>
    </head>
    <body class="page-loading">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center">{{ $data['name'] }}</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Cargando...</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations footer-fixed">

                @include('themes/default/views/layouts/sidebar')
                <!-- Main Container -->
                <div id="main-container">

                    @include('themes/default/views/layouts/header')

                    <!-- Page content -->
                    <div id="page-content">
                        @yield('content')
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Desarrollado con <i class="fa fa-heart text-danger"></i> por <a href="https://www.facebook.com/angel.kurten" target="_blank">Angel Kurten</a>
                        </div>
                        <div class="pull-left">
                            <span id="year-copy"></span> &copy; <a href="https://www.facebook.com/angel.kurten" target="_blank">{{ $data['name'] }}</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->

            <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
            <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

            <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
            <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h2 class="modal-title"><i class="fa fa-pencil"></i> Ajustes</h2>
                        </div>
                        <!-- END Modal Header -->

                        <!-- Modal Body -->
                        <div class="modal-body">
                            {{ Form::open(['route' => 'dashboard.learning', 'id'=>'form-update-account', 'method' => 'POST', 'class' => 'form-horizontal form-bordered']) }}
                                <fieldset>
                                    <legend>Informacion de la cuenta</legend>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">1er Nombre</label>
                                        <div class="col-md-4">
                                            <input type="text" id="first_name" name="first_name" class="form-control" value="{{{ Auth::user()->first_name }}}">
                                        </div>

                                        <label class="col-md-2 control-label">1er Apellido</label>
                                        <div class="col-md-4">
                                            <input type="text" id="last_name" name="last_name" class="form-control" value="{{{ Auth::user()->last_name }}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Usuario</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static">{{{ Auth::user()->username }}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" id="email" name="email" class="form-control" value="{{{ Auth::user()->email }}}">
                                        </div>
                                    </div>
                                    <!--<div class="form-group">
                                        <label class="col-md-4 control-label" for="user-settings-notifications">Email Notificaciones</label>
                                        <div class="col-md-8">
                                            <label class="switch switch-primary">
                                                <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>-->
                                </fieldset>
                                <fieldset>
                                    <legend>Actualizar Contraseña</legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="user-settings-password">Nueva contraseña</label>
                                        <div class="col-md-8">
                                            <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="user-settings-repassword">Repetir nueva contraseña</label>
                                        <div class="col-md-8">
                                            <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group form-actions">
                                    <div class="col-xs-12 text-right">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                        <!-- END Modal Body -->
                    </div>
                </div>
            </div>
            <!-- END User Settings -->

            <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
            <script src="{{ asset('platform/js/vendor/jquery-1.11.1.min.js') }}"></script>
            <script>!window.jQuery && document.write(decodeURI('%3Cscript src="{{ asset('platform/js/vendor/jquery-1.11.1.min.js') }}"%3E%3C/script%3E'));</script>

            <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
            <script src="{{ asset('platform/js/vendor/bootstrap.min.js') }}"></script>
            <script src="{{ asset('platform/js/plugins.js') }}"></script>
            <script src="{{ asset('platform/js/app.js') }}"></script>

            @yield('scripts')
        </body>
    </html>