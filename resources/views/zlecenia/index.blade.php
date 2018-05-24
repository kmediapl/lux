
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
            <a href="zlecenie/dodaj">    <button class="ui orange animated button   " tabindex="0">
                                <div class="visible content">Dodaj zlecenie</div>
                                <div class="hidden content">
                                  <i class="add icon"></i>
                                </div>        </button></a>
               

<div class="segment">
                <div class="ui search">
                                <input class="prompt" type="text" placeholder="Common passwords...">
                                <div class="results"></div>
                              </div>
</div>

                <div class="ui divider"></div>
                <div class="ui grid">
                                <div class=" wide column">
                                                <div class="ui segment">
                                                      <h1>Nadchodzące zlecenia</h1>
                                                        <table class="ui celled striped table">
                                                                        <th>Data zlecenia</th><th>Nazwa zlecenia</th><th>Miejscowość</th>
                                                                        <th>Przydzieleni pracownicy</th><th>---</th>
                                                        @foreach ($nadchodzacezlecenia as $obiekt1)
    <tr><td>{{ $obiekt1->data_zlecenia }}</td>

        <td><a href="/zlecenia/{{ $obiekt1->id }}">{{ $obiekt1->nazwa }}</a></td>
        <td>{{\App\Zleceniodawca::find($obiekt1->zleceniodawca_id)['miejscowosc']}}</td>


<td><ul>
                @foreach(\App\Zlecenie::find($obiekt1->id)->users()->get() as $dept)
                <li>{{$dept->name}}</li>
               @endforeach
        </ul>
</td>


       <td><a href="/zlecenia/{{ $obiekt1->id }}"><button class="ui icon button green"><i class="icon th"></i> Szczegóły</button></a></td></tr>
@endforeach
                                                        </table>
                                                </div>
                                </div>
                            
                             
                              </div>


        <div class="ui segment">
<h1>Lista zleceń</h1>

<table class="ui celled striped table">
        <th>Data zlecenia</th><th>Nazwa zlecenia</th><th>Nazwa zleceniodawcy</th><th>Miejscowość</th><th>Pracownicy</th>
@foreach ($niezrealizowane as $obiekt)
    <tr><td>{{ $obiekt->data_zlecenia }}</td><td><a href="/zlecenia/{{ $obiekt->id }}">{{ $obiekt->nazwa }}</a></td>
    <td><a href="/zleceniodawcy/{{$obiekt->zleceniodawca_id}}">{{\App\Zleceniodawca::find($obiekt->zleceniodawca_id)['nazwa']}}</a></td>
    <td>{{\App\Zleceniodawca::find($obiekt->zleceniodawca_id)['miejscowosc']}}</td><td>
                <a href="/pracownicy/dodajdo/{{ $obiekt->id }}"><button class="ui icon button orange"><i class="icon user"></i>Przydziel pracowników</button></a></td></tr>
@endforeach
</table>

</div>
</div>



@endsection