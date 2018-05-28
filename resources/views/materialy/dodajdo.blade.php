@extends('layouts.aplikacja1')

@section('content')
<div class="container">
        <div class="ui segment">
        <h1>Zlecenie: {{$zlecenie->nazwa}} z dnia {{$zlecenie->data_zlecenia}}</h1>
        <a href="/zlecenia/{{$idzlec}}"><button class="ui green icon button"><i class="reply icon"></i>Wróć do zlecenia</button></a>
      
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <table class="ui celled striped table">
            <th>Nazwa materiału / usługi</th><th>Ilość</th><th>Jednostka</th>
            <th>Cena</th><th>Cena dla klienta</th><th>---</th><th>---</th>
          
                        @foreach($materialywzleceniu as $material)
                     
                      
                        <form action="/materialyzmien">   
                        <input type="hidden" name="idzlec" value="{{$zlecenie->id}}">
                        <input type="hidden" name="idmat" value="{{$material->id}}">
                        <input type="hidden" name="idrecordu" value="{{$material->pivot->id}}">
                        <tr>
                               
                        <td>{{$material->id}}::{{$material->nazwa}}:::{{$material->pivot->id}}</td>

                        @if ($material->pivot->czy_zablokowane == 0)
                        <td><input value="{{$material->pivot->ilosc}}" name="ilosc"></td>
                        @else
                        <td>{{$material->pivot->ilosc}}</td>
                        @endif

                        @if ($material->pivot->czy_zablokowane == 0)
                        <td><select value="" name="jednostka">
                                <option value="m">m</option>
                                <option value="szt">szt</option>
                                <option value="litr">litr</option>
                                <option value="kg">kg</option>
                            </select>


                        </td>
                        @else
                        <td>{{$material->pivot->jednostka}}</td>
                        @endif



                        @if ($material->pivot->czy_zablokowane == 0)
                        <td><input value="{{$material->pivot->cena_materialu}}" name="cenamaterialu"></td>
                        @else
                        <td>{{$material->pivot->cena_materialu}}</td>
                        @endif
                        @if ($material->pivot->czy_zablokowane == 0)
                        <td><input value="{{$material->pivot->cena_dla_klienta}}" name="cenadlaklienta"></td>
                        @else
                        <td>{{$material->pivot->cena_dla_klienta}}</td>
                        @endif
                            <td>
                        
                                @if ($material->pivot->czy_zablokowane == 0)
                                
                                <button class="ui button icon purple"><i class="save icon"></i>Zapisz pozycję</button>
                           
                                @else
                                <p>Zapisano</p>
                                @endif
                            
                            
                            </form> 
                            
                            </td>
                                <td>
                            
                                        <a href="/materialy/odlacz/{{$material->id}}/{{$idzlec}}/{{$material->pivot->id}}">
                                            <button class="ui icon button red"> 
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