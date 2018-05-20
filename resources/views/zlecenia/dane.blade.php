@extends('layouts.aplikacja1')
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
<hr>
<h3>Materialy test</h3>
<materialy></materialy>
</hr>
<h3>Materiały<a href="/materialy/dodajdo/{{$zlecenie->id}}">Dodaj materiał/usługę</a></h3>
<table class="table">

@foreach ($materialy as $material)
<tr>
<td>{{$material->id}}</td><td>{{$material->nazwa}}</td><td>{{$material->cena}}</td><td><a href="/pracownicy/odlacz/{{$material->id}}">Usuń pracownika</a></td>
</tr>
@endforeach
</table>
<a href="/zlecenia/">Zlecenia</a><a href="/zlecenia/edytuj/{{$zlecenie->id}}">Edycja</a>
<form action="{{ url('/zlecenia', ['id' => $zlecenie->id]) }}" method="post">
    <input type="hidden" name="_method" value="delete" />
    {!! csrf_field() !!}
    <button class="btn ui orange" type="submit">Usuń</button>
</form>
        </div>

<materialy></materialy>
</div>
@endsection