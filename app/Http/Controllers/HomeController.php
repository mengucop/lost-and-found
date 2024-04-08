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

    public function add(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'pic' => 'required|mimes:png,jpg,jpeg,gif|max:10240',
            'type' => 'required'
        ]);

        $count = 0;
        if($request->type == "missing")
        {
            Student::where('email', session('student')->email)->update(['lost' => session('student')->lost + 1]);
            $count = session('student')->lost + 1;
        }
        else
        {
            Student::where('email', session('student')->email)->update(['found' => session('student')->found + 1]);
            $count = session('student')->found + 1;
        }

        $image = $request->pic;
        $image_path = session('student')->username . '-' . $request->type . $count . '.' . $image->guessExtension();
        $image->move(public_path('images'), $image_path);
        
        $item = new Item;
        $item->from = session('student')->email;
        $item->description = $request->description;
        $item->pic = $image_path;
        $item->type = $request->type;
        $item->status = "Unresolved";
        $item->save();

        return redirect('/home/' . session('student')->username);
    }
}