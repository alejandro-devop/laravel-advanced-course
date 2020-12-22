<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;
use DB;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();
        # DESC
        // Project::latest('created_at');
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project,
        ]);
    }

    public function create() 
    {
        return  view('projects.create', [
            'project' => new Project(),
        ]);
    }

    public function  store (CreateProjectRequest $request)
    {        
        // Project::create(request()->all());
        // Project::create($fields); // Using only validated fields
        // Project::create([
        //     'title'  => request('title'),
        //     'url'  => request('url'),
        //     'description'  => request('description'),
        // ]);
        Project::create($request->validated()); // With this we ensure that only the validated fields are passed to the create
        return redirect()->route('projects.index')->with('status', 'El projecto fue creado con éxito');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, CreateProjectRequest $request)
    {
        // $project->update([
        //     'title' => request('title'),
        //     'url' => request('url'),
        //     'description' => request('description'),
        // ]);
        $project->update($request->validated());
        return redirect()->route('projects.show', $project)->with('status', 'El projecto fue actualizado');
    }

    public function destroy(Project $project) 
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El projecto fue eliminado');
    }
}
