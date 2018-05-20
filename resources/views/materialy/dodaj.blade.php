
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Dodaj materiał</h1>

{{Form::open(['url' => 'materialy', 'method' => 'post'])}}
{{Form::label('nazwa', 'Materiał')}}
{{Form::text('nazwa', null,['class' => 'forminput', 'placeholder' => 'Podaj nazwę materiału usługi'])}}<br>


<button class="ui button red">
        Zapisz
      </button>
{!! Form::close() !!}
        </div>
</div>
@endsection
