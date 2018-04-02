
@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
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
<div class="container">
<h1>Index zleceń</h1>

<zlecenia></zlecenia>


</div>


@endsection