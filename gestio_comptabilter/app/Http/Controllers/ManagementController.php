<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\YourImportClass;
use App\Models\Student;
use App\Models\Frais;

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
    public function findStudentIdByMatricule($matricule){
    $student = DB::table('student')->where('mat', $matricule)->first();

    if ($student) {
        return $student->id;
    } else {
        return null;
    }
}


    public function store(Request $request){
       $montant = $request->montant;
       $type = $request->type;
       $matricule = $request->matricule;
       $etudiant_id= $this->findStudentIdByMatricule($matricule);
       $frais = new Frais();
       $frais->montant = $montant;
       $frais->type = $type;
       $frais->etudiant_id = $etudiant_id;
       if ($frais->save()) {
        return redirect()->route('Succes');
    } else {
        return "La sauvegarde a échoué.";
    }
    }
    public function updateFraisStudent(){

    }
    public function deleteFraisStudent(Request $request){


        $fee = Frais::find($request->id);

        if ($fee) {
            $fee->delete();
        }

        return view('dashboard');


    }
    public function afficherMontantFrais(Request $request)
{
    $etudiant = Student::where('mat', $request->matricule)->first();



    if ($etudiant) {
        $montantTotal = Frais::where('etudiant_id', $etudiant->id)->get();
        $solde = $etudiant->solde;
            foreach ($montantTotal as $fraisPaye) {
                $solde -= $fraisPaye->montant;
            }

        return view('editStudent', [
            'student' =>$etudiant,
            'frais_payes' => $montantTotal,
            'solde' => $solde

        ]);
    } else {
        return "Étudiant introuvable";
    }
}
}
