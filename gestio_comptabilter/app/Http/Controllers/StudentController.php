<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
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
    public function login(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'matricule' => 'required',
                'password' => 'required',
            ]);

            $mat = $validatedData['matricule'];
            $mot_de_passe = $validatedData['password'];

            $user = Student::where('mat', $mat)->first();


        } catch (\Exception $e) {
            // Handle any exceptions that occur during the login process
            return response()->json(['error' => 'Une erreur est survenue lors de la connexion'], 500);
        }
    }

}
