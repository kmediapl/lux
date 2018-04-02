@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
<h1>Nazwa obiektu: {{$obiekt->nazwa}}</h1>
<ul>

<li>{{$obiekt->miejscowosc}}</li>
<li>{{$obiekt->ulica}}</li>
<li>{{$obiekt->nrdomulokalu}}</li>
<li>{{$obiekt->kodpocztowy}}</li>

</ul>


<a href="/obiekty/">Obiekty</a><a href="/obiekty/edytuj/{{$obiekt->id}}">Edycja</a>
<form action="{{ url('/obiekty', ['id' => $obiekt->id]) }}" method="post">
    <input type="hidden" name="_method" value="delete" />
    {!! csrf_field() !!}
    <button class="btn btn-default" type="submit">Usuń</button>
</form>
        </div>


</div>
@endsection