
@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
<h1>Zlecenidawcy</h1>

<table class="table">
@foreach ($zleceniodawcy as $zleceniodawca)
    <tr><td><a href="/zlecenia/{{ $zleceniodawca->id }}">{{ $zleceniodawca->nazwa }}</a></td><td>{{ $zleceniodawca->nazwa }}</td>
        <td>{{ $zleceniodawca->ulica }}</td><td>{{ $zleceniodawca->nrdomulokalu }}</td><td>Przydziel pracowników</td></tr>
@endforeach
</table>
{{-- {{ $zleceniodawcy->links() }} --}}
</div>
</div>
<div class="container">
<h1>Index zleceń</h1>



</div>


@endsection