<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Activity;
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
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:students,email',
            'age' => 'required|numeric|min:18'
        ]);

        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age
        ]);

        // > Exercise 9 (also save a record on activity table)
        Activity::create([
            'user_id' => null,
            'action' => 'student_created',
            'description' => "New student '{$student->name}' (ID: {$student->id}) was created with email '{$student->email}' and age {$student->age}."
        ]);

        return redirect('/students');
    }
}
