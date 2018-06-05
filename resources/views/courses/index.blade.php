@extends('layouts.app')

@section('content')
    <h1>Kurser</h1>
    <p>Här presenteras alla kurser:</p>
    @foreach ($courses as $course)
        <a href="{{ route('courses.show', $course->id) }}">{{ $course->name }} {{ $course->short_name }}</a><br>
    @endforeach
    <br>
    <a href="{{ route('courses.create') }}"><button class="button new">Ny kurs</button></a>
@endsection
