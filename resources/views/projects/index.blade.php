@extends('layouts.app')

@section('title', 'List All Project')

@section('content')
<div class="container mt-5">
<form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="status">Statut</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">All statuts</option>
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="in-progress" {{ request('status') == 'in-progress' ? 'selected' : '' }}>in-progress</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="project_id">Projet</label>
                        <select name="project_id" id="project_id" class="form-control">
                            <option value="">Tous les projets</option>
                            @foreach($projects as $project)
                                <option value="{{ $project->id }}" {{ request('project_id') == $project->id ? 'selected' : '' }}>
                                    {{ $project->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

    <div class="d-flex justify-content-between mb-3">


        <div>
            {{ $projects->links('pagination::bootstrap-4') }}
        </div>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">Add Project</a>
        
    </div>
    <table class="table table-striped table-hover table table-bordered border-primary table-responsive">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name_Project</th>
                <th>Description</th>
                <th>Start_date</th>
                <th>End_date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
