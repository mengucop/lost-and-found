<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
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

        $path = url()->current();
        $path_split = explode('/', $path);
        $pic_name = end($path_split);
        $pic = Item::where('pic', $pic_name)->first();

        if(!$pic)
        {
            return redirect('/home/'.session('student')->username);
            // if($path_split[0] == 'home')
            // {
            //     return redirect('/home/'.session('student')->username);
            // }
            // else
            // {
            //     return redirect('/profile/'.session('student')->username)->with('path_split', $path_split);
            // }
        }

        session()->put('pic', $pic);
        return view('pic_view')->with('pic', $pic);
    }

    public function delete()
    {
        if(!session('student'))
        {
            return redirect('/');
        }

        $path = url()->current();
        $path_split = explode('/', $path);
        $pic_name = end($path_split);
        $pic = Item::where('pic', $pic_name)->delete();

        if(!$pic)
        {
            return redirect('/home/'.session('student')->username);
        }

        File::delete('images/'.$pic_name);
        return redirect('/home/'.session('student')->username);
    }
}
