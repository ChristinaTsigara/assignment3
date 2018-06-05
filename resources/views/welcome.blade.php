@extends('layouts.app')
@section('content')
    <h2>Välkommen till min webbplats</h2>
    <p>På den här webbplatsen kan ni välja program, kurser och studenter och titta på deras relation!</p>
    <h3>Resurser</h3>
    <nav>
        <ul>
            <li><a href="{{ route('programs.index') }}">Program</a></li>
            <li><a href="{{ route('students.index') }}">Studenter</a></li>
            <li><a href="{{ route('courses.index') }}">Kurser</a></li>
        </ul>
    </nav>
@endsection
