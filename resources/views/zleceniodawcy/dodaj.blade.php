
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Dodaj zleceniodawce</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{Form::open(['url' => 'zleceniodawcy', 'method' => 'post','class'=>"ui form"])}}
{!! csrf_field() !!}
                <div class="field">
{{Form::label('nazwa', 'Nazwa firmy')}}
{{Form::text('nazwa', null,['class' => 'forminput', 'placeholder'=>'Podaj nazwę zleceniodawcy'])}}
                </div>
<div class="four fields">
                <div class="field">
                                {{Form::label('kodpocztowy', 'Kod pocztowy')}}
                                {{Form::text('kodpocztowy', null,['class' => 'forminput', 'placeholder'=>'kod pocztowy'])}}
                                </div>
                <div class="field">
{{Form::label('miejscowosc', 'Miejscowość')}}
{{Form::text('miejscowosc', null,['class' => 'forminput', 'placeholder'=>'Miejscowość'])}}
</div>
<div class="field">
{{Form::label('ulica', 'Ulica')}}
{{Form::text('ulica', null,['class' => 'forminput', 'placeholder'=>'Ulica'])}}
</div>
<div class="field">
{{Form::label('nrdomulokalu', 'Numer domu / lokali')}}
{{Form::text('nrdomulokalu', null,['class' => 'forminput', 'placeholder'=>'Numer domu/ lokalu'])}}
</div>

</div>
<div class="three fields">
                <div class="field">
{{Form::label('nip', 'NIP')}}
{{Form::text('nip', null,['class' => 'forminput', 'placeholder'=>'NIP'])}}
</div>
<div class="field">
                {{Form::label('telefon', 'Numer telefonu')}}
                {{Form::text('telefon', null,['class' => 'forminput', 'placeholder'=>'Telefon'])}}
</div>
<div class="field">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', null,['class' => 'forminput', 'placeholder'=>'Email'])}}


</div></div>
<div class="field">
{{Form::label('uwagi', 'Uwagi')}}
{{Form::text('uwagi', null,['class' => 'forminput', 'placeholder'=>'Uwagi'])}}
</div>

<button class="ui violet button">Zapisz</button>

{!! Form::close() !!}
        </div>
</div>
@endsection