<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Student;
use App\Models\Claim;

class ClaimController extends Controller
{
    public function index()
    {
        return view('claim');
    }

    public function claim()
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
        }

        $item = Item::where('pic', $pic_name)->first();
        $item->status = 'Pending';

        $claim = new Claim;
        $claim->claimed_by = session('student')->email;
        $claim->claimed_to = $pic->email;
        $claim->pic = $pic->pic;
        $claim->status = 'Pending';
        $claim->save();

        return redirect('/home/'.session('student')->username);
    }

    public function approve(Request $request)
    {
        if(!session('student'))
        {
            return redirect('/');
        }

        

        return redirect('/claim');
    }

    public function delete(Request $request)
    {
        if(!session('student'))
        {
            return redirect('/');
        }


        // $claim = Claim::where('claimed_by', )->first();
        // $claim->delete();

        return redirect('/claim');
    }
}
