<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller{


    public function index(Request $request){


        // Récupérer les paramètres de filtrage
        $statusFilter = $request->input('status');
        $projectFilter = $request->input('project_id');

        // Obtenir les projets pour le menu déroulant
        $projects = Project::all();

        // Construire la requête de filtrage
        $query = Task::query()->with('project');

        if ($statusFilter) {
            $query->where('status', $statusFilter);
        }

        if ($projectFilter) {
            $query->where('project_id', $projectFilter);
        }

        // Paginer les résultats
        $tasks = $query->paginate(5);

        return view('tasks.index', compact('tasks', 'projects', 'statusFilter', 'projectFilter'));
    }

    public function create(){

        $projects = Project::all();
        return view('tasks.create', compact('projects'));
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function show(Task $task){

        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task){

        $projects = Project::all();
        return view('tasks.edit', compact('task', 'projects'));
    }

    public function update(Request $request, Task $task){

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task){

        $task->delete();
        return redirect()->route('tasks.index');
    }
}
