@extends('layouts.app')

@section('content')

    <form class="" action="{{ route('courses.store') }}" method="post">
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <h1>Skapa ny kurs</h1>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Kursnamn:</label>
          </div>
          <div class="col-md-10">
            <input type="text" step="any" name="name" value="" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Förkortat namn:</label>
          </div>
          <div class="col-md-10">
            <input type="text" step="any" name="short_name" value="" required>
          </div>
        </div>
        <input button class="button createbutton" type="submit" name="submit" value="Skapa"></button>
    </form>
    <a href="{{ route('courses.index') }}"><button class="button viewall">Titta på alla kurser</button></a>
@endsection
