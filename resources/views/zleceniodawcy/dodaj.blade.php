
@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
<h1>Dodaj zleceniodawce</h1>

{{Form::open(['url' => 'zleceniodawcy', 'method' => 'post'])}}
{{Form::label('nazwa', 'Nazwa firmy')}}
{{Form::text('nazwa', null,['class' => 'forminput', 'placeholder'=>'Podaj nazwę zleceniodawcy'])}}<br>
{{Form::label('miejscowosc', 'Miejscowość')}}
{{Form::text('miejscowosc', null,['class' => 'forminput', 'placeholder'=>'Mijscowość'])}}<br>
{{Form::label('ulica', 'Ulica')}}
{{Form::text('ulica', null,['class' => 'forminput', 'placeholder'=>'Ulica'])}}<br>
{{Form::label('nrdomulokalu', 'Numer domu / lokali')}}
{{Form::text('nrdomulokalu', null,['class' => 'forminput', 'placeholder'=>'Numer domu/ lokalu'])}}<br>
{{Form::label('kodpocztowy', 'Kod pocztowy')}}
{{Form::text('kodpocztowy', null,['class' => 'forminput', 'placeholder'=>'kod pocztowy'])}}<br>

{{Form::label('telefon', 'Numer telefonu')}}
{{Form::text('telefon', null,['class' => 'forminput', 'placeholder'=>'Telefon'])}}<br>
{{Form::label('uwagi', 'Uwagi')}}
{{Form::text('uwagi', null,['class' => 'forminput', 'placeholder'=>'Uwagi'])}}<br>


<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Zapisz
      </button>
{!! Form::close() !!}
        </div>
</div>
@endsection