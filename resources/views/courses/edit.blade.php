@extends('layouts.app')

@section('content')


    <form class="" action="{{ route('courses.update', $course->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <h1>Uppdatera kurs</h1>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <h2>ID {{ $course->id }}</h2>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Kursnamn:</label>
          </div>
          <div class="col-md-10">
              <input type="text" step="any" name="name" value="{{ $course->name }}" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <label for="">Förkortat namn:</label>
          </div>
          <div class="col-md-10">
            <input type="text" step="any" name="short_name" value="{{ $course->short_name }}" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12"><label for="">Program</label></div>
          <div class="col-md-5"><select class="form-control" name="program_id" required>
                <option value=""></option>
                @foreach ($programs as $program)
                <option value="{{$program->id}}" {{ ((isset($course) && $course->program_id == $program->id)? "selected":"") }}>{{$program->name}} {{$program->year}}</option>

                @endforeach

            </select>
            </div>
        </div>
        <input button class="button updatebutton" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('courses.destroy', $course->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="button deletebutton" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
