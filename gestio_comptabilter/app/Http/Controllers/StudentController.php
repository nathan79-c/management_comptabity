<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        return view('index');
    }
    public function register(Student $student,StudentRequest $request){


    }
    public function findStudentIdByMatricule($matricule){
        $student = DB::table('student')->where('mat', $matricule)->first();

        if ($student) {
            return $student->id;
        } else {
            return null;
        }
    }
    public function login(Request $request)
    {
        $etudiant = DB::table('student')->where('mat', $request->matricule)->first();

        if ($etudiant && $etudiant->mot_de_passe === $request->password) {
            // Récupérer les frais payés par l'étudiant
            $id = $this->findStudentIdByMatricule($request->matricule);
            $frais = DB::table('frais')->where('etudiant_id', $id)->get();

            // Calculer le solde de l'étudiant
            $solde = $etudiant->solde;
            foreach ($frais as $fraisPaye) {
                $solde -= $fraisPaye->montant;
            }

            // Passer les données à la vue et retourner la vue
            return view('layout.solde', [
                'student' =>$etudiant,
                'frais_payes' => $frais,
                'solde' => $solde
            ]);
        }

        // Retourner null si les informations de connexion sont incorrectes
         echo "information incorect";
    }

    public function getFraisEtudiant($etudiantId)
{
    $fraisPayes = DB::table('frais')
        ->select('montant')
        ->where('etudiant_id', $etudiantId)
        ->sum('montant');

    $etudiant = DB::table('student')
        ->select('solde')
        ->where('id', $etudiantId)
        ->first();

    $soldeRestant = $etudiant->solde - $fraisPayes;

    return [
        'frais_payes' => $fraisPayes,
        'solde_restant' => $soldeRestant,
    ];
}


}
