@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="ui segment">
                <div class="ui grid">
                                <div class="eight wide column"><p>Data zlecenia:{{$zlecenie->data_zlecenia}}</p></div>
                                <div class="eight wide column"><p>Data rozpoczęcia:{{$zlecenie->data_zlecenia}} | Data zakończenia:{{$zlecenie->data_zlecenia}}</p></div>
                </div>
                        
                        
<h1>Nazwa zlecenia: {{$zlecenie->nazwa}}</h1>

@if ($zlecenie->czy_zrealizowane==0)
<button class="ui red basic button">Zlecenie niezrealizowane</button>
        
        @else
        <button class="ui green basic button"> Zlecenie zrealizowane</button>
      
    @endif
<hr>
        <h3>Zleceniodawca: {{\App\Zleceniodawca::find($zlecenie->zleceniodawca_id)->nazwa}}</h3>
<p><b>Rodzaj usługi</b>: {{$zlecenie->rodzaj_uslugi}}</p>
<p><b>Rodzaj instalacji</b>: {{$zlecenie->rodzaj_instalacji}}</p>
<p><b>Ilość kilometrów</b>: {{$zlecenie->kilometry}}</p>
<p><b>Koszt kilometrów</b>: {{$zlecenie->kilometry_koszt}}</p>
<p><b>Opis</b>: {{$zlecenie->opis}}</p>

<hr>


<br><br>
@if (!$zlecenie->obiekt_id)
<form action="/dodajobiekt"  class="ui form" method="POST">
        @csrf
        
       <input name="idzlec" type="hidden" value="{{$zlecenie->id}}">
       <select name="idobiektu" >
@foreach (\DB::table('obiekty')->select('*')->where('zleceniodawca_id', '=', $zlecenie->zleceniodawca_id)->get() as $obiekt)

<option value="{{$obiekt->id}}">{{$obiekt->nazwa}}::::{{$obiekt->miejscowosc}}::{{$obiekt->ulica}}</option> 
@endforeach
</select>
<button type="submit"  class="ui button red">Dodaj obiekt zleceniodawcy</button>        
</form> 

@else
<b>Obiekt:</b>
@foreach  (\DB::table('obiekty')->select('*')->where('id', '=', $zlecenie->obiekt_id)->get() as $obiekt)
{{$obiekt->nazwa}} :: {{$obiekt->miejscowosc}} :: {{$obiekt->ulica}} ::{{$obiekt->nrdomulokalu}} :: 
{{$obiekt->osoba_kontaktowa}} :: {{$obiekt->telefon}} 

@endforeach
@endif






<hr>

<h3>Pracownicy przydzieleni do zlecenia</h3><a href="/pracownicy/dodajdo/{{$zlecenie->id}}"><button class="ui icon red button">
        <i class="icon add"></i>Dodaj pracownika</button> </a>
<table class="ui celled striped table">
     <th>Lp.</th><th>Imię i nazwisko</th><th>---</th>
@foreach ($pracownicy as $pracownik)
<tr>
<td>{{$pracownik->id}}</td><td>{{$pracownik->name}}</td><td><a href="/pracownicy/odlacz/{{$pracownik->id}}"><i class="ui icon red remove"></i> Usuń pracownika</a></td>
</tr>
@endforeach
      
</table>


</hr>
<h3>Materiały<a href="/materialy/dodajdo/{{$zlecenie->id}}"></h3><button class="ui icon red button"><i class="icon add "></i>Dodaj materiał/usługę</button> </a>
<table class="ui celled striped table">
<th>Lp</th><th>Nazwa</th><th>Ilość</th><th>Jednostka</th><th>Cena</th><th>Cena dla klienta</th><th>---</th>
@foreach ($materialy as $material)
<tr>
<td>{{$material->id}}</td><td>{{$material->nazwa}}</td>
<td>
                {{$material->pivot->ilosc}}
</td>
<td>
                {{$material->pivot->jednostka}}
</td>
<td>
                {{$material->pivot->cena_materialu}}
</td>
<th>{{$material->pivot->cena_dla_klienta}}</th>
<td><a href="/materialy/odlacz/{{$material->id}}/{{$zlecenie->id}}/{{$material->pivot->id}}">Usuń pozycję</a></td>
</tr>
@endforeach
</table>
<hr>

<a href="/zlecenia/"><button class="ui button green">Wszystkie zlecenia</button></a>
@if($zlecenie->czy_zrealizowane==0)
        <a href="/zrealizujzlecenie/{{$zlecenie->id}}"><button class="ui button red">Zrealizuj zlecenie</button></a>

@else
@endif
{{-- <a href="/zlecenia/edytuj/{{$zlecenie->id}}">Edycja</a>
<form action="{{ url('/zlecenia', ['id' => $zlecenie->id]) }}" method="post">
    <input type="hidden" name="_method" value="delete" />
    {!! csrf_field() !!}
    <button class="btn ui orange" type="submit">Usuń</button>
</form> --}}
        </div>

</div>
@endsection