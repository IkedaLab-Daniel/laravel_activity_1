<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // > Exercise 3 (Controller)
    public function index()
    {
        // > Exercise 6 (logic to get students, then display on blade)

        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function show($id)
    {
        $student = Student::find($id);

        if (!$student){
            return view('student.404');
        }

        return view('student.show', compact('student'));
    }
}
