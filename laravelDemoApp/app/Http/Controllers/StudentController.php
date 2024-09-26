<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = ['Bob', 'Ami', 'LiMing'];
        return view('student.index', ['students' => $students]);
    }

    public function yyindex22()
    {
        $students = Student::all();

        return view('student.index', ['students'=>$students]);
    }

}
