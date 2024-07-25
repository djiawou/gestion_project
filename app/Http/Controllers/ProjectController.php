<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        
        $projects = Project::with('tasks')->paginate(5);
        return view('projects.index',compact('projects'));
    }

    public function create(){

        $projects = Project::all(); 
        return view('projects.create',compact('projects'));
    }

    public function store(Request $request){

        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Project::create($request->all());
        return redirect()->route('projects.index');
    }

    public function show(Project $project){


        return view('projects.show', compact('project'));
    }

    public function edit(Project $project){

        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project){

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $project->update($request->all());
        return redirect()->route('projects.index');
    }

    public function destroy(Project $project){

        $project->delete();
        return redirect()->route('projects.index');
    }
}
