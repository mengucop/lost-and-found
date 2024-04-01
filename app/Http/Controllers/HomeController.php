<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Item;
use Illuminate\Contracts\Session\Session;

class HomeController extends Controller
{
    public function index(Session $session)
    {
        $email = $session->get('email');
        $student = Student::where('email', $email)->first();
        return view('home', ['student' => $student]);
    }

    public function add(Request $request, $username)
    {
        $item = new Item;
        $item->from = $request->from;
        $item->description = $request->description;
        $item->pic = $request->pic;
        $item->type = $request->type;
        $item->status = $request->status;
        $item->save();
        return redirect('/home/' . $username);
    }
}
