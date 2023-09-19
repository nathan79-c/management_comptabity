<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('index');
    }
    public function register(Student $student,StudentRequest $request){
        echo $request->matricule;

    }
}
