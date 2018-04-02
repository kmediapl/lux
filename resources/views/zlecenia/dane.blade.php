@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
<h1>Nazwa zlecenia: {{$zlecenie->nazwa}}</h1>
<ul>

<li>{{$zlecenie->nazwa}}</li>


</ul>
<h3>Dodani pracownicy<a href="/pracownicy/dodajdo/{{$zlecenie->id}}">Dodaj pracownika</a></h3>
<table class="table">
     
@foreach ($pracownicy as $pracownik)
<tr>
<td>{{$pracownik->id}}</td><td>{{$pracownik->imie}}</td><td><a href="/pracownicy/odlacz/{{$pracownik->id}}">Usuń pracownika</a></td>
</tr>
@endforeach
      
</table>
<a href="/zlecenia/">Zlecenia</a><a href="/zlecenia/edytuj/{{$zlecenie->id}}">Edycja</a>
<form action="{{ url('/zlecenia', ['id' => $zlecenie->id]) }}" method="post">
    <input type="hidden" name="_method" value="delete" />
    {!! csrf_field() !!}
    <button class="btn btn-default" type="submit">Usuń</button>
</form>
        </div>


</div>
@endsection