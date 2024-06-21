<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProjetNewRequest;
use App\Http\Requests\ProjetRequest;
use App\Models\contribution_paiement;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

use App\Models\ProjectCategory;
use App\Models\ProjectContribution;
use Database\Seeders\ProjectCategorySeeder;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function paidc(){

        return redirect('/projets')->with('success','Contribution enregistrée');
    }
    public function save(ProjetRequest $request){
        ProjectContribution::create([
            'project_id' => $request->nom_prenoms,
            'status' => "created",
            'amount' => $request->montant,
        ]);
           if (Auth::check()) {
        $user = Auth::user();
        }
        contribution_paiement::create(
           [
             'amount' => $request->montant,
            'author' => $user->first_name . ' '. $user->last_name
           ]
           );
        return view('front/home/paid',[
            'amount' => $request->montant
        ]);
    }
    public function new(){
        $categories = ProjectCategory::all();
        return view('front/home/createprojet',[
            'categories' => $categories
        ]);
    }
    public function newprojectsave(AddProjetNewRequest $request){
         if (Auth::check()) {
        $user = Auth::user();
        }
          if($request->has('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $path = 'uploads/img/';
            $file->move($path,$filename);
        }
        $user->image = $path.$filename;
        Project::create([
            'project_category_id' => $request->cat,
            'description' => $request->desc,
            'jackpot' => $request->jackpot,
            'details' => $request->detail,
            'status' => 'created',
            'title' => $request->nom,
            'user_id' =>  $user->id,
            'cover_image' => $path.$filename
        ]);
        return redirect('/projets')->with('success','Projet enrégistré');
    }
}
