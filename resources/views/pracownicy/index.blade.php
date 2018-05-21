@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Lista pracowników</h1>
<a href="/pracownicy/dodaj">   <button class="ui orange animated button" tabindex="0">
                <div class="visible content">Dodaj pracownika</div>
                <div class="hidden content">
                  <i class="add icon"></i>
                </div>        </button></a>


</a>
<table class="ui sortable celled table">
  <th>Lp.</th><th>Imię</th><th>Nazwisko</th><th>Email</th><th>---</th>
@foreach ($pracownicy as $obiekt)
    <tr><td>{{ $obiekt->id }}</td><td>{{ $obiekt->imie }}</td><td>{{ $obiekt->nazwisko }}</td><th>{{ $obiekt->email }}</th>
    <td><form action="{{ url('/pracownicy', ['id' => $obiekt->id]) }}" method="post">
      <input type="hidden" name="_method" value="delete" />
      {!! csrf_field() !!}
      <button class="ui button icon red mini" type="submit"><i class="icon delete"></i></button>
  </form></td>
    </tr>
        
@endforeach
</table>

</div>
</div>
@endsection
