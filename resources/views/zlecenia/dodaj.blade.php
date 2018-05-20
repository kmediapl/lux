
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Dodaj zlecenie</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{Form::open(['url' => 'zlecenia', 'method' => 'post','class'=>"ui form"])}}
<div class="form-group">
{{Form::label('nazwa', 'Nazwa zlecenia')}}
{{Form::text('nazwa',null,['class' => 'form-control', 'placeholder' => 'Podaj nazwę zlecenia'])}}<br>
</div>
<div class="three fields">
    <div class="field">
{{Form::label('data_zlecenia', 'Data zlecenia')}}
<div class="ui calendar" id="example1">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input type="text" placeholder="Data zlecenia" name="data_zlecenia">
        </div>
      </div>

</div>
<div class="field">
{{Form::label('data_rozpoczecia', 'Data rozpoczęcia')}}
<div class="ui calendar" id="example2">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input type="text" placeholder="Data rozpoczęcia" name="data_rozpoczecia">
        </div>
      </div>


</div>
<div class="field">
{{Form::label('data_zakonczenia', 'Data zakończenia')}}
{{Form::text('data_zakonczenia', null,['class' => 'form-control','placeholder' => date('Y-m-d H:i:s')])}}<br>
</div></div>
<div class="inline fields">
{{Form::label('rodzaj_instalacji', 'Rodzaj instalacji')}}<br>

@foreach ($rodzajeinstalacji as $rodzaj)
{{Form::label($rodzaj->nazwa, $rodzaj->nazwa)}}
{{ Form::radio('rodzaj_instalacji', $rodzaj->nazwa)}}
@endforeach
        </div>

        <div class="inline fields">
{{Form::label('rodzaj_uslugi', 'Rodzaj usługi')}}<br>

@foreach ($rodzajeuslug as $rodzaj)
{{Form::label($rodzaj->nazwa, $rodzaj->nazwa)}}
{{ Form::radio('rodzaj_uslugi', $rodzaj->nazwa)}}
@endforeach
        </div>
<div class="form-group">
{{Form::label('id_zleceniodawcy', 'Zleceniodawca')}}
{{-- <select name="id_zleceniodawcy" id="id_zleceniodawcy">
    @foreach ($zleceniodawcy as $zlecenodawca)
<option value="{{$zlecenodawca->id}}">{{$zlecenodawca->nazwa}}</option>
    @endforeach
</select> --}}
</div>

<div class="ui selection dropdown">
        <input type="hidden" name="zleceniodawca">
        <i class="dropdown icon"></i>
        <div class="default text">Gender</div>
        <div class="menu">
                @foreach ($zleceniodawcy as $zlecenodawca)
                <div class="item" data-value="{{$zlecenodawca->id}}">{{$zlecenodawca->nazwa}}</div>
                    @endforeach
         
   
        </div>
      </div>


<br>
{{Form::label('kilometry', 'Ilość kilometrów')}}
{{Form::text('kilometry', null,['class' => 'forminput', 'placeholder' => 'Ilość kilometrów'])}}<br>
{{Form::label('kilometry_koszt', 'E-Mail Address')}}
{{Form::text('kilometry_koszt', null,['class' => 'forminput', 'placeholder' => 'Koszt 100 kilemetrów'])}}<br>
{{Form::label('opis', 'Opis')}}
{{Form::text('opis',null ,['class' => 'forminput', 'placeholder' => 'Opis, uwagi do zlecenia'])}}<br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Zapisz
      </button>
{!! Form::close() !!}
        </div>
</div>








@endsection
