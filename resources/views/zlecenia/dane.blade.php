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
<p><b>Rodzaj usługi</b>: {{$zlecenie->rodzaj_uslugi}}</p>
<p><b>Rodzaj instalacji</b>: {{$zlecenie->rodzaj_instalacji}}</p>
<p><b>Ilość kilometrów</b>: {{$zlecenie->kilometry}}</p>
<p><b>Koszt kilometrów</b>: {{$zlecenie->kilometry_koszt}}</p>
<p><b>Opis</b>: {{$zlecenie->opis}}</p>

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
<th>Lp</th><th>Nazwa</th><th>Ilość</th><th>Cena</th><th>Cena dla klienta</th><th>---</th>
@foreach ($materialy as $material)
<tr>
<td>{{$material->id}}</td><td>{{$material->nazwa}}</td>
<td>
        {{-- {{$pozycja=\App\Zlecenie::find($zlecenie->id)->materialy(\App\Material::find($material->id))->get()}} --}}
</td>
<td>
        {{-- {{$pozycja=\App\Zlecenie::find($zlecenie->id)->materialy($material->id)->get()}} --}}
</td>
<th>Cena dla klienta</th>
<td><a href="/materialy/odlacz/{{$material->id}}">Usuń pozycję</a></td>
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