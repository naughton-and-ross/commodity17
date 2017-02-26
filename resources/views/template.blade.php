<!DOCTYPE html>
<html>
    <head>
        <title>Commodity Creative &middot; @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.typekit.net/rnd5fkg.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.2/pure-min.css">
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.2/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.2/grids-responsive-min.css">
        <!--<![endif]-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
        <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}" />
        @yield('head')
    </head>
    <body>
        @yield('body')
    </body>
</html>
