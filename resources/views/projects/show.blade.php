@extends('layouts.app')

@section('title', 'Details of Project')

@section('content')
    <h1>{{ $project->name }}</h1>
    <p>{{ $project->description }}</p>
    <p><strong>Date de Début:</strong> {{ $project->start_date }}</p>
    <p><strong>Date de Fin:</strong> {{ $project->end_date }}</p>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back of list</a>
@endsection
