
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Edytuj zleceniodawce</h1>
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
{{Form::text('nazwa', $zleceniodawca->nazwa,['class' => 'forminput', 'placeholder'=>'Podaj nazwę zleceniodawcy'])}}
                </div>
<div class="four fields">
                <div class="field">
                                {{Form::label('kodpocztowy', 'Kod pocztowy')}}
                                {{Form::text('kodpocztowy', $zleceniodawca->kodpocztowy,['class' => 'forminput', 'placeholder'=>'kod pocztowy'])}}
                                </div>
                <div class="field">
{{Form::label('miejscowosc', 'Miejscowość')}}
{{Form::text('miejscowosc', $zleceniodawca->miejscowosc,['class' => 'forminput', 'placeholder'=>'Miejscowość'])}}
</div>
<div class="field">
{{Form::label('ulica', 'Ulica')}}
{{Form::text('ulica', $zleceniodawca->ulica,['class' => 'forminput', 'placeholder'=>'Ulica'])}}
</div>
<div class="field">
{{Form::label('nrdomulokalu', 'Numer domu / lokali')}}
{{Form::text('nrdomulokalu', $zleceniodawca->nrdomulokalu,['class' => 'forminput', 'placeholder'=>'Numer domu/ lokalu'])}}
</div>

</div>
<div class="three fields">
                <div class="field">
{{Form::label('nip', 'NIP')}}
{{Form::text('nip', $zleceniodawca->nip,['class' => 'forminput', 'placeholder'=>'NIP'])}}
</div>
<div class="field">
                {{Form::label('telefon', 'Numer telefonu')}}
                {{Form::text('telefon', $zleceniodawca->telefon,['class' => 'forminput', 'placeholder'=>'Telefon'])}}
</div>
<div class="field">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', $zleceniodawca->email,['class' => 'forminput', 'placeholder'=>'Email'])}}


</div></div>
<div class="field">
{{Form::label('uwagi', 'Uwagi')}}
{{Form::text('uwagi', $zleceniodawca->uwagi,['class' => 'forminput', 'placeholder'=>'Uwagi'])}}
</div>

<button class="ui violet button">Zapisz</button>

{!! Form::close() !!}
        </div>
</div>
@endsection