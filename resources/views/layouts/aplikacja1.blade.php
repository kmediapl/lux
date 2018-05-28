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
            LUXWENT v0.5
          </a>
         
          <div class="ui simple dropdown item">
              <a href="/">  Zlecenia<i class="dropdown icon"></i></a>
                <div class="menu">
                  
                  <a class="item" href="/zlecenie/dodaj">Dodaj zlecenie</a>
              
                  
                
                  <a class="item" href="/">Wszystkie zlecenia</a>
                 
                </div>
              </div>

          <div class="ui simple dropdown item">
            <a href="/zleceniodawcy">  Zleceniodawcy<i class="dropdown icon"></i></a>
              <div class="menu">
                
                <a class="item" href="/zleceniodawca/dodaj">Dodaj zleceniodawcę</a>
            
                
              
                <a class="item" href="/zleceniodawcy">Wszyscy zleceniodawcy</a>
                <a class="item" href="/obiekty">Wszystkie obiekty</a>
              </div>
            </div>

            <div class="ui simple dropdown item">
                Pracownicy<i class="dropdown icon"></i>
                 <div class="menu">
                   <a class="item" href="/pracownicy/dodaj ">Dodaj pracownika</a>
                  
               
                   
                 
                   <a class="item" href="/pracownicy">Wszyscy pracownicy</a>
                 </div>
               </div>


        
               <div class="ui simple dropdown item">
                <a href="/materialy"> Materiały<i class="dropdown icon"></i></a>
                   <div class="menu">
                     <a class="item" href="/material/dodaj ">Dodaj materiał</a>
                    
                 
                     
                   
                     <a class="item" href="/materialy">Materiały</a>
                   </div>
                 </div>
                 <div class="ui simple dropdown item">
                    <a href="/raporty">  Raporty<i class="dropdown icon"></i></a>
                      <div class="menu">
                        
                        <a class="item" href="/raporty/zrealizowanezlecenia">Zrealizowane zlecenia</a>
                    
                        
                      
                        <a class="item" href="/raporty/wgusera">Zlecenia wg pracownika</a>
                        <a class="item" href="/raporty/oddo">Zlecenia od do</a>
                      </div>
                    </div>


                    <a class="header item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Wyloguj') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>



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
    text: {
    months: ['Styczeń', 'Luty', 'Marzec', 'Kwieciń', 'Maj', 'Czerwiec', 
    'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień']},
    formatter: {
    date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return year + '-' + month + '-' + day ;
    }
    }
    });
  $('#example2').calendar({ampm: false,
    text: {
    months: ['Styczeń', 'Luty', 'Marzec', 'Kwieciń', 'Maj', 'Czerwiec', 
    'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień']},
    formatter: {
    date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return year + '-' + month + '-' + day ;
    }
    }
    });
  $('#example3').calendar({ampm: false,
    text: {
    months: ['Styczeń', 'Luty', 'Marzec', 'Kwieciń', 'Maj', 'Czerwiec', 
    'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień']},
    formatter: {
    date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return year + '-' + month + '-' + day ;
    }
    }
    });
    $('#example4').calendar({ampm: false,
    text: {
    months: ['Styczeń', 'Luty', 'Marzec', 'Kwieciń', 'Maj', 'Czerwiec', 
    'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień']},
    formatter: {
    date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return year + '-' + month + '-' + day ;
    }
    }
    });
    $('#example5').calendar({ampm: false,
    text: {
    months: ['Styczeń', 'Luty', 'Marzec', 'Kwieciń', 'Maj', 'Czerwiec', 
    'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień']},
    formatter: {
    date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return year + '-' + month + '-' + day ;
    }
    }
    });
  $('.ui.selection.dropdown')
  .dropdown()
;
$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
;
$('.ui.search')
  .search({
    apiSettings: {
      url: 'http://127.0.0.1:8000/api/mojezlecenia/{query}'
    },
    fields: {
      results : 'items',
      title   : 'nazwa'
    },
    minCharacters : 1
  })
;

</script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</body>

</html>
