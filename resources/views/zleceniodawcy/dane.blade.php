@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Nazwa zleceniodawcau: {{$zleceniodawca->nazwa}}</h1>
<ul>

<li>{{$zleceniodawca->miejscowosc}}</li>
<li>{{$zleceniodawca->ulica}}</li>
<li>{{$zleceniodawca->nrdomulokalu}}</li>
<li>{{$zleceniodawca->kodpocztowy}}</li>

</ul>
<ul>
@foreach ($obiekty as $obiekt)
<li>
        {{$obiekt->nazwa}}::{{$obiekt->miejscowosc}}::{{$obiekt->ulica}}::<a href="/obiekty/{{$obiekt->id}}">Zobacz obiekt</a></li>
@endforeach
</ul>
<a href="/zleceniodawcay/">Wszyscy zleceniodawcy</a><a href="/zleceniodawcy/edytuj/{{$zleceniodawca->id}}">Edycja</a>
<form action="{{ url('/zleceniodawcy', ['id' => $zleceniodawca->id]) }}" method="post">
    <input type="hidden" name="_method" value="delete" />
    {!! csrf_field() !!}
    <button class="btn btn-default" type="submit">Usuń</button>
</form>
        </div>


</div>
@endsection