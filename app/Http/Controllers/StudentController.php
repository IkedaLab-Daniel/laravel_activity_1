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

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'age' => 'required|integer|min:1|max:120'
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age
        ]);

        return redirect('/students');
    }
}
