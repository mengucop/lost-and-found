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
                $request->session()->put('student', $student);
                return redirect()->route('home');
            }
        }
        else
        {
            return redirect()->route('/');
        }
    }
}
