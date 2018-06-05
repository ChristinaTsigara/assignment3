@extends('layouts.app')

@section('content')
    <h1>Id: {{ $course->id }}</h1>
    <p>Kursnamn: {{ $course->name }}</p>
    <p>Förkortat namn: {{ $course->short_name }}</p>
    <a href="{{ route('courses.edit', $course->id) }}"><button class="button editbutton">Redigera</button></a>
@endsection
