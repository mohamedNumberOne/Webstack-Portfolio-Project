<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
 


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("projects.add_project");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show_all_projects()
    {
        $all_projects = Project::all();

        return view("projects.show_all_projects", compact('all_projects'));
    }


    public function all_products()
    {
        return  $all_products = Product::all();
    }


    public function  welcome_all_pro()
    {

        $all_products = $this->all_products();
        $all_projects = Project::limit(3)->get();

        return view('welcome', compact('all_projects', 'all_products'));
    }



    // public function test()
    // {
    //     $all_projects = $this -> show_all_projects() ;

    //     return view("projects.show_all_projects", compact('all_projects'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

            $path = $request->file('photo')->store('images/projects', 'public');

            Project::create([

                "project_name" => $request->project_name,
                "project_details" => $request->details,
                "project_photo" => $path,

            ]);
        }

        return redirect()->back()->with('project_added', "project added succesfuly");
    }

    /**
     * Display the specified resource. Project $project ,
     */
    public function display_project($id)
    {


        $user = User::find(Auth::user()->id);
        $project = Project::findOrFail($id);

        if (!$project) {
            abort(404, 'Projet introuvable');
        }

        $users = $project->users; // Récupère les utilisateurs ayant commenté le projet, y compris les commentaires 

        return view('projects.info_pro', compact('project', "users"));
        //



    }



    /**
     * Show the form for editing the specified resource.
     */
    public function add_comment(UpdateProjectRequest $request,   $id)
    {


        $comment = $request->comment;

        $user =  User::find(Auth::user()->id); // L'utilisateur qui commente

        $project = Project::find($id); // Le projet sur lequel l'utilisateur commente 

        $user->projects()->attach($project->id, ['comment' => $comment]);

        return redirect()->back()->with('success', 'comment added');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pro =  Project::find($id);


        $pro->delete();
        unlink("storage/" . $pro->project_photo);

        return redirect()->back();
    }
}
