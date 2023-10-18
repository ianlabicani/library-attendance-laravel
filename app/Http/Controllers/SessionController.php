<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function index()
    {

        return view('sessions.index', ['activeSessions' =>  Session::getValidSessions()]);
    }

    public function store(Request $request)
    {


        Session::create([
            'student_id' => $request['id'],
            'time_in' => date('Y-m-d H:i:s'),
            'validity' => true,
        ]);
        return redirect(route('session.index'));
    }

    public function getSessionsByStudentId($studentId)
    {
        $sessions = DB::table('tbl_sessions')
            ->where('student_id', $studentId)
            ->where('validity', true)
            ->get();

        return $sessions;
    }
}
