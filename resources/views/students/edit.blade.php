@extends('layouts.app')

@section('content')


    <form class="" action="{{ route('students.update', $student->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <h1>Uppdatera student</h1>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <h2>ID {{ $student->id }}</h2>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Förnamn:</label>
          </div>
          <div class="col-md-10">
              <input type="text" step="any" name="name" value="{{ $student->first_name }}" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Efternamn:</label>
          </div>
          <div class="col-md-10">
              <input type="text" step="any" name="name" value="{{ $student->last_name }}" required>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Email:</label>
          </div>
          <div class="col-md-10">
            <input type="email" step="any" name="email" value="{{ $student->seats }}" required>
          </div>
        </div>
        <input button class="button updatebutton" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('students.destroy', $student->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="button deletebutton" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
