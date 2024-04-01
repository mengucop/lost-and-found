<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $student = Student::where('email', $email)->first();

        if($student) 
        {
            if ($student->password == $password) 
            {
                $session = $request->session()->put('student', $student);
                return redirect('/home/'. $student->username);
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect('/');
        }
    }
}
