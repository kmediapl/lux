
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Lista materialów</h1>
<a href="/material/dodaj">    <button class="ui orange animated button   " tabindex="0">
        <div class="visible content">Dodaj material</div>
        <div class="hidden content">
          <i class="add icon"></i>
        </div>        </button></a>

<table class="ui celled table">
  <th>Lp.</th>  <th>Nazwa</th><th>Akcja</th>
@foreach ($materialy as $material)
    <tr><td>{{ $material->id }}</td><td><a href="/materialy/{{ $material->id }}">{{ $material->nazwa }}</a></td>
    
    <td>

                            <form action="{{ url('/materialy', ['id' => $material->id]) }}" method="post">
                                <input type="hidden" name="_method" value="delete" />
                                {!! csrf_field() !!}
                                <button type="submit" class=" icon mini ui  red button">
                                        <i class="icon remove"></i>
                                    
                                    </button>
                            </form>


           </td>
    </tr>
@endforeach
</table>
{{ $materialy->links() }}
</div>

</div>
@endsection
