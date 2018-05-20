
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Zleceniodawcy</h1>

<table class="ui sortable celled table">
        <th>Nazwa zleceniodawcy</th><th>Miejscowość</th><th>Ulica</th><th>Numer domu lokali</th><th>Obiekty zleceniodawcy</th>
@foreach ($zleceniodawcy as $zleceniodawca)
    <tr><td><a href="/zleceniodawcy/{{ $zleceniodawca->id }}">{{ $zleceniodawca->nazwa }}</a></td><td>{{ $zleceniodawca->miejscowosc }}</td>
        <td>{{ $zleceniodawca->ulica }}</td><td>{{ $zleceniodawca->nrdomulokalu }}</td><td><a href="/obiekty/">Obiekty zleceniodawcy</a></td></tr>
@endforeach
</table>
{{-- {{ $zleceniodawcy->links() }} --}}
</div>
</div>
<div class="container">
<h1>Index zleceń</h1>



</div>


@endsection