
@extends('layouts.aplikacja1')
@section('content')
<div class="container">
        <div class="karta">
<h1>Dodaj obiekt</h1>

{{Form::open(['url' => 'obiekty', 'method' => 'post','class'=>"ui form"])}}
<div class="field">

                {{Form::label('nazwa', 'Nazwa obiektu')}}
                {{Form::text('nazwa', null,['class' => 'forminput','placeholder' =>'nazwa'])}}

</div>
<div class="four fields">
                <div class="field">
                                {{Form::label('miejscowosc', 'Miejscowość')}}
                                {{Form::text('miejscowosc',null ,['class' => 'forminput','placeholder' =>'miejscowosc'])}}
                </div>
                <div class="field">
                                {{Form::label('kodpocztowy', 'Kodpocztowy')}}
                                {{Form::text('kodpocztowy',null ,['class' => 'forminput','placeholder' =>'kodpocztowy'])}}
                        </div>
                        <div class="field">
                                        {{Form::label('ulica', 'Ulica')}}
                                        {{Form::text('ulica',null ,['class' => 'forminput','placeholder' =>'ulica'])}}
                                </div>
                                <div class="field">
                                                {{Form::label('nrdomulokalu', 'Numer domu \ lokalu')}}
                                                {{Form::text('nrdomulokalu',null ,['class' => 'forminput','placeholder' =>'nrdomulokalu'])}}
                                        </div>

</div>

{{Form::label('telefon', 'Telefon')}}
{{Form::text('telefon', null,['class' => 'forminput','placeholder' =>'telefon'])}}<br>
{{Form::label('uwagi', 'Uwagi')}}
{{Form::text('uwagi',null ,['class' => 'forminput','placeholder' =>'uwagi'])}}<br>
{{Form::label('zleceniodawca_id', 'Zleceniodawca')}}
<select name="zleceniodawca_id" >
    @foreach ($zleceniodawcy as $zlecenodawca)
<option value="{{$zlecenodawca->id}}">{{$zlecenodawca->nazwa}}</option>
    @endforeach
</select><br>
<button class="ui button icon violet">
      <i class="icon save"></i>  Zapisz
      </button>
{!! Form::close() !!}
        </div>
</div>
@endsection
