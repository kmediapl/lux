
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
{{Form::open(['url' => 'pracownicy/zapiszpracownika', 'method' => 'post','class'=>"ui form"])}}
<div class="two fields">
<div class="field">
{{Form::label('imie', 'Imię pracownika')}}
{{Form::text('imie',null,['class' => 'form-control', 'placeholder' => 'Podaj imię pracownika'])}}
</div>
<div class="field">
        {{Form::label('nazwisko', 'Nazwisko pracownika')}}
        {{Form::text('nazwisko',null,['class' => 'form-control', 'placeholder' => 'Podaj nazwisko pracownika'])}}
        </div>
    </div>
<div class="field">
        {{Form::label('Adres email', 'Adress email')}}
        {{Form::text('email',null,['class' => 'form-control', 'placeholder' => 'Podaj email'])}}
        </div>
        <div class="two fields">
                <div class="field">
                        {{Form::label('haslo', 'Hasło')}}
                        {{Form::text('haslo',null,['class' => 'form-control', 'placeholder' => 'Podaj hasło'])}}
                        </div>
                        <div class="field">
                                {{Form::label('haslo2', 'Powtórz hasło')}}
                                {{Form::text('haslo2',null,['class' => 'form-control', 'placeholder' => 'Powtórz hasło'])}}
                                </div>


        </div>
      

<button class="ui purple button">ZAPISZ</button>
{!! Form::close() !!}
        </div>
</div>








@endsection