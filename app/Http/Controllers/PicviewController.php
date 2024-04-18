<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Student;
use Illuminate\Http\Request;

class PicviewController extends Controller
{
    public function index()
    {
        if(!session('student'))
        {
            return redirect('/');
        }

        $path_check = url()->current();
        $path_check = explode('/', $path_check);
        $path_check = end($path_check);
        $pic = Item::where('pic', $path_check)->first();

        if(!$pic)
        {
            return redirect('/home/'.session('student')->username);
        }

        session()->put('pic', $pic);
        return view('pic_view')->with('pic', $pic);
    }
}
