@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
<h1>Crear nuevo Proyecto</h1>

<form action="{{route('projects.store')}}" method="POST"> 
    @csrf 
    
    <label for="title">
        Título del Proyecto<br>
        <input type="text" name="title" required>
    </label>
    <br>
    
    <label for="url">
        URL del Proyecto<br>
        <input type="text" name="url" required>
    </label>
    <br>
    
    <label for="description">
        Descripción del Proyecto<br>
        <textarea name="description" required></textarea>
    </label>
    <br>
    
    <button type="submit">Crear Proyecto</button>
</form>

@endsection
