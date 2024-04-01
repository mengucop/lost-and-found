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
        $username = $request->input('username');
        $password = $request->input('password');

        $student = Student::where('username', $username)->first();

        if ($student) 
        {
            if ($student->password == $password) 
            {
                $request->session()->put('student', $student);
                return redirect()->route('home');
            }
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
