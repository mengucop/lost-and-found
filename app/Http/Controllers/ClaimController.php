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
        if(!session('student'))
        {
            return redirect('/');
        }

        $claims = Claim::all()->where("claimed_to", session("student")->email)
        ->orWhere("claimed_by", session("student")->email);
        return view('claim')->with('claims', $claims);
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

        if($pic->status == 'Pending')
        {
            Item::where('pic', $pic_name)->update(['status' => 'Unresolved']);
            Claim::where('pic', $pic_name)->where('claimed_by', session('student')->email)->delete();
        }
        else
        {
            Item::where('pic', $pic_name)->update(['status' => 'Pending']);
            $claim = new Claim;
            $claim->claimed_by = session('student')->email;
            $claim->claimed_to = $pic->from;
            $claim->pic = $pic->pic;
            $claim->status = 'Pending';
            $claim->save();
        }

        return redirect(url()->previous());
        // return redirect('/home/'.session('student')->username);
    }

    public function approve()
    {
        if(!session('student'))
        {
            return redirect('/');
        }

        $path = url()->current();
        $path_split = explode('/', $path);
        $pic_name = end($path_split);
        
        $pic = Item::where('pic', $pic_name)->first();
        $claimed_by = $path_split[count($path_split) - 2];
        $claimed_to = session('student')->email;

        
        return redirect('/claim');
    }

    public function delete()
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
