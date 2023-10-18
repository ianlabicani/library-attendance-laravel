<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // make result ordered by frequency
        return view('students.index', ['students' => Student::all()]);
    }

    public function show(Request $request)
    {
        return view('students.show', ['student' => Student::find($request->student)]);
    }

    public function search(Request $request)
    {
        return view('students.show', ['student' => Student::find($request->id)]);
    }
}
