
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Lista materialów</h1>
<a href="/material/dodaj">
    <button class="ui  violet button">
            <i class="material-icons">add</i>
        </button>
</a><br>
<table class="ui celled table">
    <th>Nazwa</th><th>Akcja</th>
@foreach ($materialy as $material)
    <tr><td><a href="/materialy/{{ $material->id }}">{{ $material->nazwa }}</a></td>
    
    <td>

                            <form action="{{ url('/materialy', ['id' => $material->id]) }}" method="post">
                                <input type="hidden" name="_method" value="delete" />
                                {!! csrf_field() !!}
                                <button type="submit" class="mini compact  icon ui  violet button">
                                        <i class="material-icons">remove</i>
                    
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
