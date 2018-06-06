@extends('layouts.app')

@section('content')
    <h1>Id: {{ $program->id }}</h1>
    <p>Programnamn: {{ $program->name }}</p>
    <p>Årstart: {{ $program->year }}</p>
    <a href="{{ route('programs.edit', $program->id) }}"><button class="button editbutton">Redigera</button></a>
@endsection
