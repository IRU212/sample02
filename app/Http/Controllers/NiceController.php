<?php

namespace App\Http\Controllers;

use App\Models\EC;
use App\Models\Nice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NiceController extends Controller
{
    public function nice(Request $request){
        $nice = new Nice();
        $nice->ec_id = $request->ec_id;
        $nice->user_id = Auth::user()->id;
        $nice->save();
        return back();
    }

    public function unnice(Request $request){
        $nice = new Nice();
        $user = Auth::user()->id;
        $nice = Nice::where('ec_id', $request->ec_id)->where('user_id', $user)->first();
        $nice->delete();
        return back();
    }
}
