<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', ['students' => Student::all(), 'active_sessions' => Session::getValidSessions()]);
    }
}
