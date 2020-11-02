<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function show($id)
    {
        return view('projects.show', [
            'project' => Project::findOrFail($id),
        ]);
    }
}