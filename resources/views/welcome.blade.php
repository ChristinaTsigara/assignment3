@extends('layouts.app')
@section('content')
    <h2>Välkommen till min webbplats</h2>
    <p>På den här webbplatsen kan ni välja, registrera, uppdatera och radera tre resurser: program, kurser och studenter. Ni kan också titta på deras koppling!!!</p>
    <h3>Resurser</h3>
    <nav>
        <ul>
            <li><a href="{{ route('programs.index') }}">Program</a></li>
            <li><a href="{{ route('students.index') }}">Studenter</a></li>
            <li><a href="{{ route('courses.index') }}">Kurser</a></li>
        </ul>
    </nav>
@endsection
