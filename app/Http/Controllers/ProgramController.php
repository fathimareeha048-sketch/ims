<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->get();
        return view('programs.index', compact('programs'));
    }

    public function create()
    {
        return view('programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|unique:programs,code',
        ]);

        Program::create([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            'is_active' => 1
        ]);

        return redirect()->route('programs.index')->with('success', 'Program Created Successfully!');
    }
}
