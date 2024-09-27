<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = ['Bob', 'Ami', 'LiMing'];
        $title = 'I am you.3333';
        return view('student.index', ['students' => $students, 'title' => $title]);
    }

    public function list()
    {
        $students = Student::all();
        echo "students";
        print "\n\r---->fjh";
        return view('student.list', ['students'=>$students]);
    }

    public function detail(Request $request)
    {
        $input = $request->all();
         dd($input);
//        $user = User::find($input['id']);
        $one = Student::query()->find($id);
        echo $one;
        return view('student.detail');
    }

}
