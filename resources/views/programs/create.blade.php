@extends('layouts.app')

@section('content')

    <form class="" action="{{ route('programs.store') }}" method="post">
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <h1>Skapa nytt program</h1>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Programnamn:</label>
          </div>
          <div class="col-md-10">
            <input type="text" step="any" name="name" value="" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Årstart:</label>
          </div>
          <div class="col-md-10">
            <input type="text" step="any" name="year" value="" required>
          </div>
        </div>
        <input button class="button createbutton" type="submit" name="submit" value="Skapa"></button>
    </form>
    <a href="{{ route('programs.index') }}"><button class="button viewall">Titta på alla program</button></a>
@endsection
