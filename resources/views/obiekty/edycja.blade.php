
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
    <div class="ui segment">
<h1>Edytuj obiekt</h1>

{{Form::open(['url' => ['obiekty/update',$obiekt->id], 'method' => 'put'])}}
{{Form::label('nazwa', 'Nazwa obiektu')}}
{{Form::text('nazwa', $obiekt->nazwa,['class' => 'forminput','placeholder' =>'nazwa'])}}<br>
{{Form::label('ulica', 'Ulica')}}
{{Form::text('ulica', $obiekt->ulica,['class' => 'forminput','placeholder' =>'nazwa'])}}<br>
{{Form::label('nrdomulokalu', 'Numer domu lokalu')}}
{{Form::text('nrdomulokalu', $obiekt->nrdomulokalu,['class' => 'forminput','placeholder' =>'nazwa'])}}<br>
{{Form::label('kodpocztowy', 'Kod pocztowy')}}
{{Form::text('kodpocztowy', $obiekt->kodpocztowy,['class' => 'forminput','placeholder' =>'nazwa'])}}<br>
{{Form::label('miejscowosc', 'Miejscowość')}}
{{Form::text('miejscowosc', $obiekt->miejscowosc,['class' => 'forminput','placeholder' =>'nazwa'])}}<br>
{{Form::label('telefon', 'Telefon')}}
{{Form::text('telefon', $obiekt->telefon,['class' => 'forminput','placeholder' =>'nazwa'])}}<br>
{{Form::label('uwagi', 'Uwagi')}}
{{Form::text('uwagi', $obiekt->uwagi,['class' => 'forminput','placeholder' =>'nazwa'])}}<br>
{{-- {{Form::label('nazwa', 'Nazwa obiektu')}} --}}

{{--  <select name="id_zleceniodawcy" >
    @foreach ($zleceniodawcy as $zlecenodawca)
<option value="{{$zlecenodawca->id}}">{{$zlecenodawca->nazwa}}</option>
    @endforeach
</select><br>  --}}
<button class="ui button violet icon"><i class="ui icon save"></i> Zapisz</button>
{!! Form::close() !!}
</div>
</div>
@endsection
