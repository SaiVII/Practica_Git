@extends('layout')

@section('title', 'portafolio°'. $project->title)

@section('content')

<h1> {{ $project->title }}</h1>
    {{ $project->description }}
    <p>{{ $project->created_at->diffForHumans()}}</p>
@endsection

