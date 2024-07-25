@extends('layouts.app')

@section('title', 'Détails of Tasks')

@section('content')
    <div class="container mt-5">
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <p><strong>Statut:</strong> {{ $task->status }}</p>
        <p><strong>Projet:</strong> {{ $task->project->name }}</p>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back of list</a>
    </div>
@endsection
