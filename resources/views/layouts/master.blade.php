<!doctype html>
<html lang="es">
<head>
    @include('partials.header')

    @include('partials.style')
</head>

    <body class="sticky-header">
        <section>

            @include('partials.sidebar')

            @include('partials.header_top')

                <div class="main-content" >

                    @yield('content')

            @include('partials.footer')

                </div>

    </section>

    @include('partials.script')
    </body>
</html>