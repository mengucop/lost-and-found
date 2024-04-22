<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Item;
use Illuminate\Support\Facades\File;
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

    public function profile_update(Request $request)
    {
        $new_name = $request->input('name');
        session('student')->name = $new_name;
        Student::where('username', session('student')->username)->update(['name' => $new_name]);
        return view('profile');
    }

    public function delete()
    {
        if(!session()->has('student'))
        {
            return redirect('/');
        }
        
        foreach(Item::where('from', session('student')->email)->get() as $item)
        {
            File::delete('images/'.$item->pic);
        }

        Item::where('from', session('student')->email)->delete();
        Student::where('username', session('student')->username)->delete();
        session()->forget('student');
        return redirect('/');
    }
}
