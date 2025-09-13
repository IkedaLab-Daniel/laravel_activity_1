<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // > Exercise 3
    public function index()
    {
        return "List of Students";
    }

    public function show($id)
    {
        return "Student ID: {$id}";
    }
}
