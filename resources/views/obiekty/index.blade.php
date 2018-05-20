
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Lista obiektów</h1>
<a href="/obiekt/dodaj">   <button class="ui orange animated button   " tabindex="0">
                <div class="visible content">Dodaj zlecenie</div>
                <div class="hidden content">
                  <i class="add icon"></i>
                </div>        </button></a>

    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">add</i>
          </button>
</a>
<table class="table">
@foreach ($obiekty as $obiekt)
    <tr><td><a href="/obiekty/{{ $obiekt->id }}">{{ $obiekt->nazwa }}</a></td><td>{{ $obiekt->miejscowosc }}</td>
        <td>{{ $obiekt->ulica }}</td><td>{{ $obiekt->nrdomulokalu }}</td></tr>
@endforeach
</table>
{{ $obiekty->links() }}
</div>
</div>
@endsection
