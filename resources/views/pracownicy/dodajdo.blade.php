@extends('layouts.aplikacja1')

@section('content')
<div class="container">
        <div class="karta">
            <pre>
            {{-- {{print_r($a)}} --}}
            </pre>
                @foreach($praczlec as $dana)
                {{$dana->id}}:::
                @endforeach
    <table class="table">
    @foreach($pracownicy as $pracownik)
    <tr>
    <td>{{$pracownik->id}}::{{$pracownik->imie}}::{{$pracownik->nazwisko}}</td><td>
        
        <a href="/pracownicy/dodajdozapisz/{{$pracownik->id}}/{{$idzlec}}">Dodaj do zlecenia</a></td>
        <td><a href="/zlecenia/{{$idzlec}}">Wróć do zlecenia</a></td>
    </tr>
    @endforeach
    </table>
        </div>
</div>
@endsection