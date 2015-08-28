<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <title>{{ $data->name }}</title>

    <meta charset="utf-8">
    <meta name="description" content="Aprende PHP desde 0 hasta convertirte en un profesional, con los mejores cursos gratuitos y de pago, haz parte de la comunidad de PHPeros mas grande">

    <meta name="author" content="Angel Kurten">

    <!-- viewport settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('web/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/cubeportfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/liquid-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/spinner.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/YTPlayer.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body id="home">

<!-- LOADING -->
<div class="loading-wrapper">
    <div class="loading">
        <div class="spinner">
            Cargando
        </div>
    </div>
</div>

<!-- NAVIGATION -->
<header>

    <a id="player" class="player" data-property="{ vol:20, showYTLogo:false, videoURL:'0pXYp72dwl0', containment:'#video', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, addRaster:false, quality:'default'}"></a>

    <div id="video" class="video"></div>

    <div class="mask"></div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
        <div class="container">
            <div data-scroll-header class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" data-scroll href="#home"><h1>{{ $data->name }}</h1><!--<img src="img/logo.png" alt="logo">--></a>
            </div>

            <div class="collapse navbar-collapse" id="nav">
                {!! $principal->boot() !!}
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    <div class="slider-wrapper">
        <div class="slider-content">
            <div class="liquid-slider" id="main-slider">

                <div class="slide-item">
                    <h1>{{ trans('dashboard::ui.frontend.welcome', ['name'=>$data->name]) }}</h1>
                    <h2>{{ $data->description }}</h2>
                    <a data-scroll href="#about" class="btn-o">{{ trans('dashboard::ui.buttons.about-me') }}</a>
                    <a href="#" class="btn">{{ trans('dashboard::ui.buttons.registration') }}</a>
                </div>

            </div>
        </div>
    </div>

</header>

<!-- ABOUT -->
<div class="about">
    <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="50" width="100%" class="separator" id="sol" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 100 L0 0 L100 100 Z"/>
    </svg>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow flipInX" data-wow-delay="0.3s">
                    <h2>{{ trans('dashboard::ui.sections.about-me.name') }}</h2>
                    <h3>{{ trans('dashboard::ui.sections.about-me.description') }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">

                        <div class="col-lg-6 text-justify about-text wow flipInY" data-wow-delay="0.5s">
                            {{ trans('dashboard::ui.sections.about-me.box-one') }}
                        </div>

                        <div class="col-lg-6 hidden-xs text-justify about-text wow flipInY" data-wow-delay="0.7s">
                            {{ trans('dashboard::ui.sections.about-me.box-two') }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="about-images about-slider">
                            <div class="item wow flipInY" data-wow-delay="0.9s">
                                <div class="img">
                                    <div class="mask"></div>
                                    <div class="new-bandage"></div>
                                    <img src="{{ asset('web/img/about00.jpg') }}" style="width:400px; height:200px;" alt="" class="img-responsive" />
                                </div>
                            </div>
                            <div class="item wow flipInY" data-wow-delay="1.1s">
                                <div class="img">
                                    <div class="mask"></div>
                                    <img src="{{ asset('web/img/about01.jpg') }}" style="width:400px; height:200px;" alt="" class="img-responsive" />
                                </div>
                            </div>
                            <div class="item wow flipInY" data-wow-delay="1.3s">
                                <div class="img">
                                    <div class="mask"></div>
                                    <img src="{{ asset('web/img/about02.jpg') }}" style="width:400px; height:200px;" alt="" class="img-responsive" />
                                </div>
                            </div>
                            <div class="item wow flipInY" data-wow-delay="1.3s">
                                <div class="img">
                                    <div class="mask"></div>

                                    <img src="{{ asset('web/img/about03.jpg') }}" style="width:400px; height:200px;" alt="" class="img-responsive" />
                                </div>
                            </div>
                            <div class="item wow flipInY" data-wow-delay="1.3s">
                                <div class="img">
                                    <div class="mask"></div>

                                    <img src="{{ asset('web/img/about04.jpg') }}" style="width:400px; height:200px;" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- TEAM -->
<div class="team" data-stellar-background-ratio="0.5">
    <div class="mask"></div>
    <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="50" width="100%" class="separator" id="sag" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 100 L0 0 L100 0 Z"/>
    </svg>
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow flipInY" data-wow-delay="0.3s">
                        <h2 class="uppercase">{{ trans('dashboard::ui.sections.team.name') }}</h2>
                        <h3>{{ trans('dashboard::ui.sections.team.description', ['name'=>$data->name]) }}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-slider">

                        <div class="member text-center wow fadeInDown divAvatar" data-wow-delay="0.6s">
                            <img class="img-responsive avatar" src="{{ asset('web/img/member02.png') }}" alt="">
                            <h4>Angel Kurten</h4>
                            <div class="sep"></div>
                            <p>Developer PHP - CEO</p>
                            <div class="social">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank"  href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>

                        <div class="member text-center wow fadeInDown" data-wow-delay="1.0s">
                            <img class="img-responsive avatar" src="{{ asset('web/img/member02.png') }}" alt="">
                            <h4>Angel Gamboa</h4>
                            <div class="sep"></div>
                            <p>Diseñador</p>
                            <div class="social">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>

                        <div class="member text-center wow fadeInDown" data-wow-delay="1.2s">
                            <img class="img-responsive avatar" src="{{ asset('web/img/member03.png') }}" alt="">
                            <h4>Rafaela Pinto</h4>
                            <div class="sep"></div>
                            <p>Developer PHP</p>
                            <div class="social">
                                <a target="_blank" href="https://www.facebook.com/rafael.pinto20?fref=nf"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="http://www.twitter.com/rpinto18"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>

                        <div class="member text-center wow fadeInDown" data-wow-delay="1.2s">
                            <img class="img-responsive avatar" src="{{ asset('web/img/member04.png') }}" alt="">
                            <h4>Rafa Pinto</h4>
                            <div class="sep"></div>
                            <p>Developer PHP</p>
                            <div class="social">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<!-- SERVICES -->
<div class="services" data-stellar-background-ratio="0.5">

    <div class="mask"></div>

    <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="50" width="100%" class="separator" id="sag" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 100 L0 0 L100 0 Z"/>
    </svg>

    <section id="services">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow flipInX" data-wow-delay="0.3s">
                        <h2 class="uppercase">{{ trans('dashboard::ui.sections.services.name') }}</h2>
                        <h3>{{ trans('dashboard::ui.sections.services.description', ['name' => $data->name]) }}</h3>
                    </div>
                </div>
            </div>

            <div class="row hidden-xs">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center item wow flipInY" data-wow-delay="0.5s">
                    <i class="fa fa-book icon"></i>
                    <h4>{{ trans('dashboard::ui.sections.services.items.one.name') }}</h4>
                    <p>{{ trans('dashboard::ui.sections.services.items.one.description') }}</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center item wow flipInY" data-wow-delay="0.7s">
                    <i class="fa fa-umbrella icon"></i>
                    <h4>{{ trans('dashboard::ui.sections.services.items.two.name') }}</h4>
                    <p>{{ trans('dashboard::ui.sections.services.items.two.description') }}</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center item wow flipInY" data-wow-delay="0.9s">
                    <i class="fa fa-certificate icon"></i>
                    <h4>{{ trans('dashboard::ui.sections.services.items.three.name') }}</h4>
                    <p>{{ trans('dashboard::ui.sections.services.items.three.description') }}</p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- CONTACT -->
<section id="contact">

    <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="50" width="100%" class="separator" id="sol" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 100 L0 0 L100 100 Z"/>
    </svg>

    <!-- <div id="map" class="map"></div> -->

    <div class="container-fluid bottom">
        <div class="row-fluid">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="row">
                            <div class="col-lg-3">
                                <i class="fa fa-phone white"></i> +57 0000000000
                            </div>
                            <div class="col-lg-4">
                                <i class="fa fa-envelope white"></i> angelkurten@hotmail.com
                            </div>
                            <div class="col-lg-4 text-right">
                                <a target="_BLANK" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_BLANK" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_BLANK" href="#" rel="publisher"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Scripts -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('web/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('web/js/smooth-scroll.js') }}"></script>
<script src="{{ asset('web/js/wow.min.js') }}"></script>
<script src="{{ asset('web/js/retina-1.1.0.min.js') }}"></script>
<script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('web/js/jquery.liquid-slider.js') }}"></script>
<script src="{{ asset('web/js/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.cubeportfolio.js') }}"></script>
<script src="{{ asset('web/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ asset('web/js/main.js') }}"></script>

<!-- GOOGLE ANALYTICS -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55026837-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
</script>

</body>
</html>
