<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();

        $projects = Project::all();
        return view('home.home', compact('projects', 'users'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view("projects.projects", compact("projects"));
    }

    public function services()
    {
        return view("home.services");
    }

    public function about()
    {
        return view("home.about");
    }

    public function contact()
    {
        return view("home.contact");
    }

    public function show($id){
        $project = Project::findOrFail($id);

        return view("projects.show", compact("project"));
    }

}
