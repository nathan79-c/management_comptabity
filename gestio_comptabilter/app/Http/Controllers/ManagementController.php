<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\YourImportClass;
use App\Models\Student;

class ManagementController extends Controller
{
    public function index(){


    }
    public function updatePromotion(Request $request){
         // Récupération des données du formulaire
         $mat = $request->input('mat');
         $nom = $request->input('nom');
         $post_nom = $request->input('post_nom');
         $prenom = $request->input('prenom');
         $email = $request->input('email');
         $mot_de_passe = $request->input('mot_de_passe');
         $solde = $request->input('solde');
         $promotion_id = $request->input('promotion_id');

         // Création d'un nouvel utilisateur
         $user = new Student();
         $user->mat = $mat;
         $user->nom = $nom;
         $user->post_nom = $post_nom;
         $user->prenom = $prenom;
         $user->email = $email;
         $user->mot_de_passe = $mot_de_passe;
         $user->solde = $solde;
         $user->promotion_id = $promotion_id;

         // Enregistrement de l'utilisateur
         $user->save();

    }

    public function store(Request $request){
        echo($request);
    }
    public function updateFraisStudent(){

    }
    public function deleteFraisStudent(){

    }
}
