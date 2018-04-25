<html>
    <head>
            <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
            <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <title>App Name - @yield('title')</title>
            <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
     
        <div id="app">
           
                @yield('content')
       

        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>