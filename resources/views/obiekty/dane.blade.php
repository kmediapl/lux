@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="ui segment">
                        <form action="{{ url('/obiekty', ['id' => $obiekt->id]) }}" method="post">
                                <input type="hidden" name="_method" value="delete" />
                                {!! csrf_field() !!}
                                <button class="ui red button  right floated" type="submit"><i class="icon remove"></i>Usuń</button>
                            </form>
<h1>Nazwa obiektu: {{$obiekt->nazwa}}</h1>
<h4>Zleceniodawca: <div style="display:none;">{{$dane = \App\Zleceniodawca::find($obiekt->zleceniodawca_id)}}</div>
{{$dane->nazwa}}:: NIP: {{$dane->nip}}</h4>
<ul>

<li>{{$obiekt->miejscowosc}}</li>
<li>{{$obiekt->ulica}}</li>
<li>{{$obiekt->nrdomulokalu}}</li>
<li>{{$obiekt->kodpocztowy}}</li>
<li>{{$obiekt->zleceniodawca_id}}</li>
</ul>



<a href="/obiekty/"><button class="ui button icon green"><i class="icon th"></i>Wszystkie obiekty</button></a>
<a href="/obiekty/edytuj/{{$obiekt->id}}"><button class="ui button icon green"><i class="icon edit green"></i>Edycja</button></a>

        </div>


</div>
@endsection