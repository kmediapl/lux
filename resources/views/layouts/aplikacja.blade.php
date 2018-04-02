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
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css"/>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/ripples.min.css"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
   <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/css/bootstrap-material-datetimepicker.css" />
</head>
<body>
    <div id="app">
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
          <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">System obsługi zleceń</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a  href="/zlecenia">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                           Wszystkie zlecenia
                          </button>
                    </a>
                    <a href="/zlecenie/dodaj">
                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                                <i class="material-icons">add</i>
                              </button>
                    </a>
              
              
            </nav>
            
          </div>
          
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Title</span>
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="/zlecenia">Zlecenia</a>
            <a class="mdl-navigation__link" href="/zleceniodawcy">Zleceniodawcy</a>
            <a class="mdl-navigation__link" href="/obiekty">Obiekty</a>
            <a class="mdl-navigation__link" href="/materialy">Materiały</a>
          </nav>
        </div>
        <main class="mdl-layout__content">
          <div class="page-content">    
              
             
            @yield('content')</div>
        </main>
      </div>


       

    </div>
    <!-- Scripts -->
   
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script
    src="https://code.jquery.com/jquery-2.2.4.js"
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.0/locale/pl.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/js/bootstrap-material-datetimepicker.min.js"></script>
    
      <script type="text/javascript">
          $(document).ready(function()
            {
              $('#data_zlecenia').bootstrapMaterialDatePicker
              ({
                format : 'YYYY-MM-DD', lang : 'pl',
                time: false,
               
              });
              $('#data_rozpoczecia').bootstrapMaterialDatePicker
              ({
                format : 'YYYY-MM-DD HH:mm:ss', lang : 'pl',
                time: true,
                
              });
              $('#data_zakonczenia').bootstrapMaterialDatePicker
              ({
                format : 'YYYY-MM-DD HH:mm:ss', lang : 'pl',
                time: true,
                
              });

              

                $.material.init()
            });

		</script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
