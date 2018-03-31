@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
<h1>Nazwa zlecenia: {{$zlecenie->nazwa}}</h1>
<ul>

<li>{{$zlecenie->nazwa}}</li>


</ul>


<a href="/zlecenia/">Zlecenia</a><a href="/zlecenia/edytuj/{{$zlecenie->id}}">Edycja</a>
<form action="{{ url('/zlecenia', ['id' => $zlecenie->id]) }}" method="post">
    <input type="hidden" name="_method" value="delete" />
    {!! csrf_field() !!}
    <button class="btn btn-default" type="submit">Usuń</button>
</form>
        </div>


</div>
@endsection