<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class MainController extends Controller

{
    //Pagina Home

    public function home(){
        $projects = Project::all();
        $data = [
                 'projects' => $projects
             ];
        return view('home',compact('projects'));
    }

    //Pagina Admin

    public function logged(){
        return view('logged');
    }
    //Pagina Show
    public function projectshow(Project $project) {

        return view('projectshow', compact('project'));
    }

    public function projectdelete(Project $project) {

        $project -> delete();
    
        return redirect() -> route('home');
    }
}
