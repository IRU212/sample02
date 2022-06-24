<?php

namespace App\Http\Controllers;

use App\Models\EC;
use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index($eC,Request $request){
        $items = EC::all();
        $user = auth()->user();

        $acounts = User::all();
        $acount = User::find($eC);
        
        $test = EC::with('users')->get();
        $samples = json_decode($test,true);

        $sample = $samples;
        $tests = $sample;

        //検索機能
        $keyword = $request->input('keyword');
        $query = User::query();
        if (!empty($keyword)) {
            $query->where('name','like','%'.$keyword.'%');
        }
        $results = $query->orderBy('id','asc')->paginate(5);

        $data = [
            'items' => $items,
            'user' => $user,
            'acount' => $acount,
            'acounts' => $acounts,
            'tests' => $tests,
            'results' => $results,
        ];
        return view('setting',$data);
    }

    public function destroy($eC){
        EC::where('user_id',$eC)->delete();
        User::where('id',$eC)->delete();
        return  redirect()->route('home');
    }
}
