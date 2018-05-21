@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="ui segment">
<h1>Zrealizowane zlecenia</h1>
<table class="ui celled table">
    <th>Nazwa zlecenia</th><th>Data rozpoczęcia</th><th>Data zakończenia</th>
        @foreach ($zlecenia as $obiekt)
     <tr>
    <td>{{$obiekt->nazwa}}</td>      <td>{{$obiekt->data_rozpoczecia}}</td>     <td>{{$obiekt->data_zakonczenia}}</td>    
    </tr>   
        @endforeach
</table>


        </div>
</div>
@endsection