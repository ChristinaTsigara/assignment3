@extends('layouts.app')

@section('content')
    <h1>Id: {{ $student->id }}</h1>
    <p>Förnamn: {{ $student->first_name }}</p>
    <p>Efternamn: {{ $student->last_name }}</p>
    <p>Email: {{ $student->email }}</p>
    <a href="{{ route('students.edit', $student->id) }}"><button class="button editbutton">Redigera</button></a>
@endsection
