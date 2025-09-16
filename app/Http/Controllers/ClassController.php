<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    // Show all classes
    public function index()
    {
        $classes = Classes::all();
        return view('classes.index', compact('classes'));
    }

    // Show create form
    public function create()
    {
        return view('classes.create');
    }

    // ✅ Save new class
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'classname' => 'required|string|max:255',
        ]);

        // save in DB
        Classes::create([
            'classname' => $request->classname,
        ]);

        // redirect back
        return redirect()->route('classes.index')
                         ->with('success', 'Class saved successfully!');
    }
}
