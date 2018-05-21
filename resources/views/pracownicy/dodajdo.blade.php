@extends('layouts.aplikacja1')

@section('content')
<div class="container">
        <div class="ui segment">
         <h1>Dodaj pracownika do zlecenia</h1>
         <h3>Do zlecenia dodano: 
                @foreach($praczlec as $dana)
                {{\App\User::find($dana->id)['name']}} 
                
                @endforeach
            </h3>
    <table class="ui celled striped table">
        <th>LP.</th><th>Imię i nazwisko</th><th>---</th><th>---</th>
    @foreach($pracownicy as $pracownik)
    <tr>
    <td>{{$pracownik->id}}</td><td>{{$pracownik->imie}}::{{$pracownik->nazwisko}}</td><td>
        
        <a href="/pracownicy/dodajdozapisz/{{$pracownik->id}}/{{$idzlec}}"><button class="ui button icon red"><i class="icon add "></i> Dodaj do zlecenia</button></a></td>
        <td><a href="/zlecenia/{{$idzlec}}"><button class="ui button icon green"><i class="icon th "></i> Wróć do zlecenia</button></a></td>
    </tr>
    @endforeach
    </table>
        </div>
</div>
@endsection