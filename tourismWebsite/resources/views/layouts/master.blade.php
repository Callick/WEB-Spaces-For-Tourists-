<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--
        
    TemplateMo 556 Catalog-Z

    https://templatemo.com/tm-556-catalog-z

    -->
    </head>
    <body>
        @include('layouts.loaderHeaderSearch')

        @yield('content')

        @include('layouts.footer')
        

        <script src="{{ asset('js/plugins.js') }}"></script>
        <script>
            $(window).on("load", function() {
                $('body').addClass('loaded');
            });
        </script>
    </body>
</html>