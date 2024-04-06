<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Item;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        if(!session()->has('student'))
        {
            return redirect('/');
        }
        
        return view('profile');
    }
}
