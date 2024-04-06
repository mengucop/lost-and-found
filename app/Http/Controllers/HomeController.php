<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Item;
use Illuminate\Contracts\Session\Session;

class HomeController extends Controller
{
    public function index()
    {
        if(!session()->has('student'))
        {
            return redirect('/');
        }

        // $username = session('student')->username;
        // if("/home/".$username != request()->route()->getName())
        // {
        //     return redirect("/home/".$username);
        // }

        return view('home');
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
