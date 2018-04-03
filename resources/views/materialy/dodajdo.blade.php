@extends('layouts.aplikacja')

@section('content')
<div class="container">
        <div class="karta">
        <h1>Zlecenie: {{$zlecenie->nazwa}} z dnia {{$zlecenie->data_zlecenia}}</h1>
                <table class="table">
                        @foreach($materialywzleceniu as $material)
                        <tr>
                        <td>{{$material->id}}::{{$material->nazwa}}</td>
                        <td><input name="ilosc"></td>
                        <td><input name="cena"></td>
                        <td><input name="cenadlaklienta"></td>
                        <td>
                            
                            <a href="/materialy/dodajdozapisz/{{$material->id}}/{{$idzlec}}">Usuń material do zlecenia</a></td>
                            <td><a href="/zlecenia/{{$idzlec}}">Wróć do zlecenia</a></td>
                        </tr>
                        @endforeach
                        </table>
            <br>
    <table class="table">
    @foreach($materialy as $material)
    <tr>
    <td>{{$material->id}}::{{$material->nazwa}}</td><td>
        
        <a href="/materialy/dodajdozapisz/{{$material->id}}/{{$idzlec}}">Dodaj material do zlecenia</a></td>
        <td><a href="/zlecenia/{{$idzlec}}">Wróć do zlecenia</a></td>
    </tr>
    @endforeach
    </table>
        </div>
</div>
@endsection