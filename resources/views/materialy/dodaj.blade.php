
@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
<h1>Dodaj materiał</h1>

{{Form::open(['url' => 'materialy', 'method' => 'post'])}}
{{Form::label('nazwa', 'Meteriał')}}
{{Form::text('nazwa', null,['class' => 'forminput', 'placeholder' => 'Podaj nazwę materiału usługi'])}}<br>


<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Zapisz
      </button>
{!! Form::close() !!}
        </div>
</div>
@endsection
