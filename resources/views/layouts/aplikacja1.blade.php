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
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.css" rel="stylesheet" type="text/css" />


<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="jquery.tablesort.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" />
</head>
<body>
    <div id="app">
      <div class="ui fixed inverted menu">
        <div class="ui container">
          <a href="/" class="header item">
            LUXWENT 05
          </a>
         
          <div class="ui simple dropdown item">
            Słowniki<i class="dropdown icon"></i>
            <div class="menu">
              <a class="item" href="#">Dodaj pracownika</a>
              <a class="item" href="/zleceniodawca/dodaj">Dodaj zleceniodawcę</a>
          
              
            
              <a class="item" href="#">Dodaj pozyycję materiału</a>
            </div>
          </div>
          <a href="/zleceniodawcy" class="item">Zlecenidawcy</a>
          <a href="/materialy" class="item">Materiały</a>
        </div>
      </div>
              <br>
              <br>
              <br>
             
            @yield('content')</div>
       


       

    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.js"></script>
<script>
  $('#example1').calendar( {ampm: false,
    months: ['Styczeń', 'Luty', 'Marzec', 'April', 'Maj', 'June', 
    'July', 'August', 'September', 'October', 'November', 'December'],});
  $('#example2').calendar({ampm: false});
  $('.ui.selection.dropdown')
  .dropdown()
;
</script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</body>

</html>
