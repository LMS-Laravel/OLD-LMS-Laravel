<!doctype html>
<html lang="es">
<head>
    @include('themes.default.views.layouts.admin.partials.header')

    @include('themes.default.views.layouts.admin.partials.style')
</head>

<body class="sticky-header">
<section>

    @include('themes.default.views.layouts.admin.partials.sidebar')

    @include('themes.default.views.layouts.admin.partials.header_top')

    <div class="main-content" >

        @yield('content')

        @include('themes.default.views.layouts.admin.partials.footer')

    </div>

</section>

@include('themes.default.views.layouts.admin.partials.script')
</body>
</html>