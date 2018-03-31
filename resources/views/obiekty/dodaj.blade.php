
@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
<h1>Dodaj obiekt</h1>

{{Form::open(['url' => 'obiekty', 'method' => 'post'])}}
{{Form::label('email', 'E-Mail Address')}}
{{Form::text('nazwa', 'nazwa',['class' => 'forminput'])}}<br>
{{Form::label('email', 'E-Mail Address')}}
{{Form::text('ulica', 'ulica',['class' => 'forminput'])}}<br>
{{Form::label('email', 'E-Mail Address')}}
{{Form::text('nrdomulokalu', 'nrdomulokalu',['class' => 'forminput'])}}<br>
{{Form::label('email', 'E-Mail Address')}}
{{Form::text('kodpocztowy', 'kodpocztowy',['class' => 'forminput'])}}<br>
{{Form::label('email', 'E-Mail Address')}}
{{Form::text('miejscowosc', 'miejscowosc',['class' => 'forminput'])}}<br>
{{Form::label('email', 'E-Mail Address')}}
{{Form::text('telefon', 'telefon',['class' => 'forminput'])}}<br>
{{Form::label('email', 'E-Mail Address')}}
{{Form::text('uwagi', 'uwagi',['class' => 'forminput'])}}<br>
{{Form::label('email', 'E-Mail Address')}}
<select name="id_zleceniodawcy" >
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
