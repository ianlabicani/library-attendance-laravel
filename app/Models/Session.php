<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Session extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $fillable = [
        'student_id',
        'time_in',
        'time_out',
        'total_minutes',
        'validity'
    ];


    public static function getValidSessions()
    {
        $query = DB::table('sessions as s')
            ->select('s.id', 's.student_id', 'st.last_name', 'st.first_name', 's.time_in', 's.time_out')
            ->selectRaw('TIMESTAMPDIFF(SECOND, s.time_in, NOW()) AS session_seconds')
            ->leftJoin('students as st', 's.student_id', '=', 'st.id')
            ->where('s.validity', 1)
            ->whereNull('s.time_out')
            ->orderByDesc('session_seconds');

        return $query->get();
    }
}
