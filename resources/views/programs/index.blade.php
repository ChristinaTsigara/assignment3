@extends('layouts.app')

@section('content')
    <h1>Program</h1>
    <p>Här presenteras alla program:</p>
    @foreach ($programs as $program)
        <a href="{{ route('programs.show', $program->id) }}">{{ $program->name }}</a><br>
    @endforeach
    <br>
    <a href="{{ route('programs.create') }}"><button class="button new">Nytt program</button></a>
@endsection
