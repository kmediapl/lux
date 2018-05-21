
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Zleceniodawcy</h1>
<a href="/zleceniodawca/dodaj">   <button class="ui orange animated button   " tabindex="0">
                <div class="visible content">Dodaj obiekt</div>
                <div class="hidden content">
                  <i class="add icon"></i>
                </div>        </button></a>

   
</a>
@foreach (Alert::all() as $alert)
<div class="ui negative message">
                <i class="close icon"></i>
                <div class="header">
                               
                                {{ $alert }}
                           
                </div>
            </div>
            @endforeach

<table class="ui sortable celled table">
        <th>Nazwa zleceniodawcy</th><th>Miejscowość</th><th>Ulica</th><th>Nr domu</th><th>Obiekty zleceniodawcy</th><th>--</th>
@foreach ($zleceniodawcy as $zleceniodawca)
    <tr><td><a href="/zleceniodawcy/{{ $zleceniodawca->id }}">{{ $zleceniodawca->nazwa }}</a></td><td>{{ $zleceniodawca->miejscowosc }}</td>
        <td>{{ $zleceniodawca->ulica }}</td><td>{{ $zleceniodawca->nrdomulokalu }}</td><td><a href="/obiekty/">Obiekty zleceniodawcy</a></td>

<td>  <a href="/zleceniodawcy/edytuj/{{$zleceniodawca->id}}"><div class="ui button icon green mini" >
                <i class="edit icon"></i></div></a>
       
                <form action="{{ url('/zleceniodawcy', ['id' => $zleceniodawca->id]) }}" method="post">
                        <input type="hidden" name="_method" value="delete" />
                        {!! csrf_field() !!}
                        <button class="ui button icon red mini" type="submit"><i class="icon delete"></i></button>
                    </form></td>
</tr>
@endforeach

</table>
{{-- {{ $zleceniodawcy->links() }} --}}
</div>
</div>
<div class="container">
<h1>Index zleceń</h1>



</div>


@endsection