<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Symfony\Contracts\Service\Attribute\Required;

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

    public function projectcreate() {

        return view('projectcreate');
    }

    public function projectstore(Request $request) {

        $data = $request -> validate([
            'name' => 'string',
            'description' => 'nullable|string',
            'main_image' => 'required|string',
            'release_date'=>'date',
            'repo_link'=>'required|string',

        ]);
    
        $project = new Project();
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];
    
        $project -> save();
    
        return redirect() -> route('home');
    }
    public function projectedit(Project $project) {

        return view('projectedit', compact('project'));
    }
    public function projectupdate(Request $request, Project $project ) {

        $data = $request -> validate([
            'name' => 'string',
            'description' => 'nullable|string',
            'main_image' => 'required|string',
            'release_date'=>'date',
            'repo_link'=>'required|string',

        ]);
    
       
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];
    
        $project -> save();
    
        return redirect() -> route('home');
    }
}
