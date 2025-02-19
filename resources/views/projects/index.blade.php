@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1>Portafolio</h1>
    <a href="{{ route('projects.create')}}">Crear proyecto</a>
    <ul>
    @forelse ($projects as $project)
        <li><a href="{{route('projects.show', $project)}}">{{ $project->title }}</a></li>
    @empty
        <p>No projects available</p>
    @endforelse
</ul>
@endsection