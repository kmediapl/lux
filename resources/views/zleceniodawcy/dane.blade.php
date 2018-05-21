@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
                        <form action="{{ url('/zleceniodawcy', ['id' => $zleceniodawca->id]) }}" method="post" class="ui  ">
                                <input type="hidden" name="_method" value="delete" />
                                {!! csrf_field() !!}
                                <button class="ui button submit red  right floated" type="submit"><i class="icon delete"></i>Usuń</button>
                            </form>
                        <h2 class="ui center aligned icon header">
                                        <i class="circular user icon"></i>
                                        Nazwa zleceniodawcy: {{$zleceniodawca->nazwa}}
                                      </h2>
                                      <div class="ui center aligned grid">
                                               NIP:{{$zleceniodawca->nip}}
                                      </div>
                                      <div class="ui center aligned grid">
                                                <i class="circular home icon"></i>
                                      </div>
                                     <div class="ui center aligned grid">
                                    
Miejscowość: {{$zleceniodawca->miejscowosc}} Kod pocztowy: {{$zleceniodawca->kodpocztowy}} 
 Ulica: {{$zleceniodawca->ulica}}  Numer domu/lokalu: {{$zleceniodawca->nrdomulokalu}}
<br>
</div>
 <div class="ui center aligned grid">
                <i class="circular  envelope outline icon orange "></i>
                

 </div>
 <div class="ui center aligned grid">
Telefon: {{$zleceniodawca->telefon}}, Email: {{$zleceniodawca->email}}
</div>
<hr>
<div class="ui center aligned segment">
<h1 class="ui center ">Obiekty zleceniodawcy</h1>
<a href="/obiekt/dodaj  "><button class="ui button icon red"><i class="icon add "></i></button></a>
<ul>
@foreach ($obiekty as $obiekt)
<li>
        {{$obiekt->nazwa}}::{{$obiekt->miejscowosc}}::{{$obiekt->ulica}}::<a href="/obiekty/{{$obiekt->id}}">Zobacz obiekt</a></li>
@endforeach
</ul>
 </div>
 <div class="ui center aligned ">
<a href="/zleceniodawcy/">
        <div class="ui button green" >  <i class="icon th"></i>Wszyscy zleceniodawcy</div> 
        </a>
        <a href="/zleceniodawcy/edytuj/{{$zleceniodawca->id}}"><div class="ui button green" >
                        <i class="edit icon"></i>Edycja</div></a>
               
                       
                     


                        </div>

        </div>


</div>
@endsection