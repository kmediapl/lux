<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
<!-- datapicker-->
    
   
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" />
</head>
<body>
    <div id="app">
      <div class="ui fixed inverted menu">
        <div class="ui container">
          <a href="#" class="header item">
            LUXWENT 05
          </a>
          <a href="#" class="item">START</a>
          <div class="ui simple dropdown item">
            Słowniki<i class="dropdown icon"></i>
            <div class="menu">
              <a class="item" href="#">Dodaj pracownika</a>
              <a class="item" href="#">Dodaj zleceniodawcę</a>
          
              
            
              <a class="item" href="#">Dodaj pozyycję materiału</a>
            </div>
          </div>
        </div>
      </div>
              <br>
              <br>
              <br>
             
            @yield('content')</div>
       


       

    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.js"></script>


    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>