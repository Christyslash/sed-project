<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function contribution(){
        $projets = Project::all();

        return view('front/home/contribution',[
            'collection' => $projets
        ]);
    }
      public function contact(){
        return view('front/home/contact');
    }
    public function dons(){
        return view('front/home/dons');
    }
    
    public function about(){
        return view('front/home/about');
    }
    public function index(){
        return view('front/home/index');
    }
    public function service(){
        return view('front/home/service');
    }
    public function volontaire(){
        return view('front/home/volontaire');
    }
      public function projet(){
        $projet = Project::all()->sortByDesc('id');

        return view('front/home/projet',[
            'projet' => $projet
        ]);
    }
}
