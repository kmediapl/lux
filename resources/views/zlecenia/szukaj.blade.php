
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
           
               

<div class="">
                <a href="/zlecenie/dodaj">    <button class="ui orange animated button   " tabindex="0">
                                <div class="visible content">Dodaj zlecenie</div>
                                <div class="hidden content">
                                  <i class="add icon"></i>
                                </div>        </button></a>
<div class="ui segment">
        
                                <form action="/szukajzlecenia" class="ui form">
                                     <div class="four fields"> 
                                                <div class="field">
                                                </div>
                                                <div class="field">
                                                </div>  
                                             <div class="field">
                                                      
                                                <input  name="nazwa"  type="text" placeholder="Nazwa zlecenia..">
                                             </div> 
                                         
                                                {{-- <div class="field">
                                                           
                                                <input type="text" placeholder="Miejscowość...">
                                        </div>  --}}
                                        <div class="field">
                                     <button class="ui button green fluid">Szukaj</button>
                                     </div></div>
                                </form>
                        </div>
</div>

                <div class="ui divider"></div>
                <div class="ui grid">
                                <div class=" wide column">
                                                <div class="ui segment">
                                                      <h1>Szukane zlecenia</h1>
                                                        <table class="ui celled striped table">
                                                                        <th>Data zlecenia</th><th>Nazwa zlecenia</th><th>Miejscowość</th>
                                                                        <th>Przydzieleni pracownicy</th><th>---</th>
                                                        @foreach ($zlecenia as $obiekt1)
    <tr><td>{{ $obiekt1->data_zlecenia }}</td>

        <td><a href="/zlecenia/{{ $obiekt1->id }}">{{ $obiekt1->nazwa }}</a></td>
        <td>{{\App\Zleceniodawca::find($obiekt1->zleceniodawca_id)['miejscowosc']}}</td>


<td><ul>
                @foreach(\App\Zlecenie::find($obiekt1->id)->users()->get() as $dept)
                <li>{{$dept->name}}</li>
               @endforeach
        </ul>
</td>


       <td><a href="/zlecenia/{{ $obiekt1->id }}"><button class="ui icon button green"><i class="icon th"></i> Szczegóły</button></a></td></tr>
@endforeach
                                                        </table>
                                                </div>
                                </div>
                            
                             
                              </div>



</div>



@endsection