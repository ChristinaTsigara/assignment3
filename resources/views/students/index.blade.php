@extends('layouts.app')

@section('content')
    <h1>Studenter</h1>
    <p>Här presenteras alla studenter:</p>
    @foreach ($students as $student)
        <a href="{{ route('students.show', $student->id) }}">{{ $student->last_name }} {{ $student->first_name }}</a><br>
    @endforeach
    <br>
    <a href="{{ route('students.create') }}"><button class="button new">Ny student</button></a>
@endsection
