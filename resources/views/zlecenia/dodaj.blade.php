
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
{{Form::label('data_zakonczenia', 'Data ')}}
<div class="ui calendar" id="example3">
    <div class="ui input left icon">
      <i class="calendar icon"></i>
      <input type="text" placeholder="Data zakończenia" name="data_zakonczenia">
    </div>
  </div>
</div></div>
<div class="inline fields">
{{Form::label('rodzaj_instalacji', 'Rodzaj instalacji')}}<br>

@foreach ($rodzajeinstalacji as $rodzaj)
{{Form::label($rodzaj->nazwa, $rodzaj->nazwa)}}
{{ Form::radio('rodzaj_instalacji', $rodzaj->nazwa)}}
@endforeach
        </div>

        <div class="inline field">
                {{-- <div class="field"> --}}
{{Form::label('rodzaj_uslugi', 'Rodzaj usługi')}}

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
<div class="field">
<div class="ui selection dropdown">
        <input type="hidden" name="zleceniodawca_id">
        <i class="dropdown icon"></i>
        <div class="default text">Gender</div>
        <div class="menu">
                @foreach ($zleceniodawcy as $zlecenodawca)
                <div class="item" data-value="{{$zlecenodawca->id}}">{{$zlecenodawca->nazwa}}</div>
                    @endforeach
         
   
        </div>
      </div>


    </div>
<div class="two fields">
<div class="field">
{{Form::label('kilometry', 'Ilość kilometrów')}}
{{Form::text('kilometry', null,['class' => 'forminput', 'placeholder' => 'Ilość kilometrów'])}}
</div>
<div class="field">
{{Form::label('kilometry_koszt', 'Koszt kilometrów')}}
{{Form::text('kilometry_koszt', null,['class' => 'forminput', 'placeholder' => 'Koszt 100 kilometrów'])}}
</div></div>
<div class="field">
{{Form::label('opis', 'Opis')}}
{{Form::text('opis',null ,['class' => 'forminput', 'placeholder' => 'Opis, uwagi do zlecenia'])}}</div>
<button class="ui purple button">ZAPISZ</button>
{!! Form::close() !!}
        </div>
</div>








@endsection
