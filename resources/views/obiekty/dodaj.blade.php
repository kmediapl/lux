
@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
<h1>Dodaj obiekt</h1>

{{Form::open(['url' => 'obiekty', 'method' => 'post'])}}
{{Form::label('nazwa', 'Nazwa obiektu')}}
{{Form::text('nazwa', null,['class' => 'forminput','placeholder' =>'nazwa'])}}<br>
{{Form::label('ulica', 'Ulica')}}
{{Form::text('ulica',null ,['class' => 'forminput','placeholder' =>'ulica'])}}<br>
{{Form::label('nrdomulokalu', 'Numer domu \ lokalu')}}
{{Form::text('nrdomulokalu',null ,['class' => 'forminput','placeholder' =>'nrdomulokalu'])}}<br>
{{Form::label('kodpocztowy', 'Kodpocztowy')}}
{{Form::text('kodpocztowy',null ,['class' => 'forminput','placeholder' =>'kodpocztowy'])}}<br>
{{Form::label('miejscowosc', 'Miejscowość')}}
{{Form::text('miejscowosc',null ,['class' => 'forminput','placeholder' =>'miejscowosc'])}}<br>
{{Form::label('telefon', 'Telefon')}}
{{Form::text('telefon', null,['class' => 'forminput','placeholder' =>'telefon'])}}<br>
{{Form::label('uwagi', 'Uwago')}}
{{Form::text('uwagi',null ,['class' => 'forminput','placeholder' =>'uwagi'])}}<br>
{{Form::label('zleceniodawca_id', 'Zleceniodawca')}}
<select name="zleceniodawca_id" >
    @foreach ($zleceniodawcy as $zlecenodawca)
<option value="{{$zlecenodawca->id}}">{{$zlecenodawca->nazwa}}</option>
    @endforeach
</select><br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Zapisz
      </button>
{!! Form::close() !!}
        </div>
</div>
@endsection
