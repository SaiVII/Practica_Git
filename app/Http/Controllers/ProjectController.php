<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; 

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        
        return view('projects.index',[
            'projects' => Project::latest()->paginate(10)
        ] );
    }
    
public function show(Project $project){
    

    return view('projects.show',[
        'project' => $project
    ]);
}

public function create(){
    return view('projects.create');
}

public function store(){

    return Project::create(request()->all());

    return redirect()->route('project.index');
}
}