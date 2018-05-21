
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="ui segment">
<h1>Lista obiektów</h1>
<a href="/obiekt/dodaj">   <button class="ui orange animated button   " tabindex="0">
                <div class="visible content">Dodaj obiekt</div>
                <div class="hidden content">
                  <i class="add icon"></i>
                </div>        </button></a>

   
</a>
<table class="ui celled table">
        <th>Nazwa obiektu</th><th>Miejscowość</th><th>Ulica</th><th>Numer domu/lokalu</th><th>Nazwa zleceniodawcy</th>
@foreach ($obiekty as $obiekt)
    <tr><td><a href="/obiekty/{{ $obiekt->id }}">{{ $obiekt->nazwa }}</a></td><td>{{ $obiekt->miejscowosc }}</td>
        <td>{{ $obiekt->ulica }}</td><td>{{ $obiekt->nrdomulokalu }}</td>
    <th>{{\App\Zleceniodawca::find($obiekt->zleceniodawca_id)['nazwa']}}</th>
</tr>
@endforeach
</table>
{{ $obiekty->links() }}
</div>
</div>
@endsection
