
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
                                <div class="eight wide column">
                                                <div class="ui segment">
                                                        Nadchodzące zlecenia
                                                        <table class="ui celled striped table">
                                                        @foreach ($nadchodzacezlecenia as $obiekt1)
    <tr><td><a href="/zlecenia/{{ $obiekt1->id }}">{{ $obiekt1->data_zlecenia }}</a></td><td>{{ $obiekt1->nazwa }}</td>
       <td><a href="/zlecenia/{{ $obiekt1->id }}">Szczegóły</a></td></tr>
@endforeach
                                                        </table>
                                                </div>
                                </div>
                                <div class="eight wide column">
                                                <div class="ui segment">
                                                        Zlecenia niezrealizowane
                                                </div>
                                </div>
                             
                              </div>


        <div class="ui segment">
<h1>Lista zleceń</h1>

<table class="table">
@foreach ($niezrealizowane as $obiekt)
    <tr><td><a href="/zlecenia/{{ $obiekt->id }}">{{ $obiekt->data_zlecenia }}</a></td><td>{{ $obiekt->nazwa }}</td>
        <td>{{ $obiekt->ulica }}</td><td>{{ $obiekt->nrdomulokalu }}</td><td>
                <a href="/pracownicy/dodajdo/{{ $obiekt->id }}">Przydziel pracowników</a></td></tr>
@endforeach
</table>
{{ $niezrealizowane->links() }}
</div>
</div>



@endsection