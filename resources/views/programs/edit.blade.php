@extends('layouts.app')

@section('content')


    <form class="" action="{{ route('programs.update', $program->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <h1>Uppdatera program</h1>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <h2>ID {{ $program->id }}</h2>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Programnamn:</label>
          </div>
          <div class="col-md-10">
              <input type="text" step="any" name="name" value="{{ $program->name }}" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Årstart:</label>
          </div>
          <div class="col-md-10">
            <input type="text" step="any" name="year" value="{{ $program->year }}" required>
          </div>
        </div>
        <input button class="button updatebutton" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('programs.destroy', $program->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="button deletebutton" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
