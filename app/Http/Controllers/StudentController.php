<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function index(){

        $student = ["nom"=>"ELYAZID","prenom"=>"MOHAMED"];

        return $student;
    }

    function addStudent($nom, $prenom, $age, $taille){
        $student = new Student();
        $student->nom = $nom;
        $student->prenom = $prenom;
        $student->age = $age;
        $student->taille= $taille;

        // la persistence # ajout dans la base
        $student->save();

    }


    function getAllStudents(){


        return Student::cursor();
    }


    function getStudentById($id){
        $student = Student::find($id);
        return $student;
    }

}
