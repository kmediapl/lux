@extends('layouts.aplikacja1')

@section('content')
<div class="container">
        <div class="ui segment">
        <h1>Zlecenie: {{$zlecenie->nazwa}} z dnia {{$zlecenie->data_zlecenia}}</h1>
        <a href="/zlecenia/{{$idzlec}}"><button class="ui green icon button"><i class="reply icon"></i>Wróć do zlecenia</button></a>
        <table class="ui celled striped table">
            <th>Nazwa materiału / usługi</th><th>Ilość</th><th>Cena</th><th>Cena dla klienta</th><th>---</th><th>---</th>
          
                        @foreach($materialywzleceniu as $material)
                        <form action="/materialyzmien">   
                        <input type="hidden" name="idzlec" value="{{$zlecenie->id}}">
                        <input type="hidden" name="idmat" value="{{$material->id}}">
                        <tr>
                        <td>{{$material->id}}::{{$material->nazwa}}</td>
                        <td><input value="" name="ilosc"></td>
                        <td><input name="cenamaterialu"></td>
                        <td><input name="cenadlaklienta"></td>
                            <td><button class="ui button icon purple"><i class="save icon"></i>Zapisz pozycję</button> </form></td>
                                <td>
                            
                                        <a href="/materialy/odlacz/{{$material->id}}/{{$idzlec}}"><button class="ui icon button red"> 
                                            <i class="remove icon"></i>Usuń pozycję</button></a></td>
                        </tr> 
                        @endforeach
                        </table>
   
      <a href="/zlecenia/{{$idzlec}}"><button class="ui green icon button"><i class="reply icon"></i>Wróć do zlecenia</button></a>
            <br>
    <table class="ui celled striped table">
    @foreach($materialy as $material)
    <tr>
    <td>{{$material->id}}::{{$material->nazwa}}</td><td>
        
        <a href="/materialy/dodajdozapisz/{{$material->id}}/{{$idzlec}}">
            <button class="ui button orange"><i class="icon add"></i>Dodaj material do zlecenia</button></a></td>
        
    </tr>
    @endforeach
    </table>
        </div>
</div>
@endsection