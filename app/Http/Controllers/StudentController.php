<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

public function index()
{
    // Get all students with their class
    $students = \App\Models\Student::with('class')->get();

    return view('students.index', compact('students'));
}


    public function create()
{
    $classes = \App\Models\Classes::all();
    return view('students.create', compact('classes'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'class_id' => 'required|exists:classes,id',
    ]);

    \App\Models\Student::create($request->all());

    return redirect()->route('students.index')->with('success', 'Student added');
}

}
