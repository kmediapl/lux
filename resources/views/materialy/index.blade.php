
@extends('layouts.aplikacja')
@section('content')
<div class="container">
        <div class="karta">
<h1>Lista materialów</h1>
<a href="/material/dodaj">
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">add</i>
          </button>
</a>
<table class="table">
@foreach ($materialy as $material)
    <tr><td><a href="/materialy/{{ $material->id }}">{{ $material->nazwa }}</a></td></tr>
@endforeach
</table>
{{ $materialy->links() }}
</div>
</div>
@endsection
