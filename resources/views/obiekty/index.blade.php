
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Index obiektow</h1>
<a href="/obiekt/dodaj">
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
