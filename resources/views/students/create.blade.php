@extends('layouts.app')

@section('content')

    <form class="" action="{{ route('students.store') }}" method="post">
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <h1>Skapa ny student</h1>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Förnamn:</label>
          </div>
          <div class="col-md-10">
            <input type="text" step="any" name="first_name" value="" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Efternamn:</label>
          </div>
          <div class="col-md-10">
            <input type="text" step="any" name="last_name" value="" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Email:</label>
          </div>
          <div class="col-md-10">
            <input type="email" step="any" name="email" value="" required>
          </div>
        </div>
        <input button class="button createbutton" type="submit" name="submit" value="Skapa"></button>
    </form>
    <a href="{{ route('students.index') }}"><button class="button viewall">Titta på alla studenter</button></a>
@endsection
