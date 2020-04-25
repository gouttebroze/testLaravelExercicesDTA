<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">    

    <script src="{{ asset('js/app.js') }}" defer></script>
       

        <!-- Styles -->
        
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>

    </head>
    <body>
        @yield('content')
        <v-app> </v-app>
    </body>
   
</html>
