
@extends('layouts.aplikacja')
@section('content')
<div class="container">
   
<h1>Edytuj obiekt</h1>

{{Form::open(['url' => ['obiekty/update',$obiekt->id], 'method' => 'put'])}}

{{Form::text('nazwa', $obiekt->nazwa)}}<br>
{{Form::text('ulica', $obiekt->ulica)}}<br>
{{Form::text('nrdomulokalu', $obiekt->nrdomulokalu)}}<br>
{{Form::text('kodpocztowy', $obiekt->kodpocztowy)}}<br>
{{Form::text('miejscowosc', $obiekt->miejscowosc)}}<br>
{{Form::text('telefon', $obiekt->telefon)}}<br>
{{Form::text('uwagi', $obiekt->uwagi)}}<br>

{{--  <select name="id_zleceniodawcy" >
    @foreach ($zleceniodawcy as $zlecenodawca)
<option value="{{$zlecenodawca->id}}">{{$zlecenodawca->nazwa}}</option>
    @endforeach
</select><br>  --}}
<button>Zapisz</button>
{!! Form::close() !!}

</div>
@endsection
