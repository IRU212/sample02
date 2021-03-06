<?php

namespace App\Http\Controllers;

use App\Models\EC;
use App\Models\User;
use App\Http\Requests\StoreECRequest;
use App\Http\Requests\UpdateECRequest;
use App\Models\Nice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ECController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,EC $eC)
    {

        $items = User::all();
        $user = auth()->user();

        $acounts = User::all();

        $id = $user->id;
        
        $test = EC::leftJoin('users','ecs.user_id','=','users.id')->orderBy('ecs.created_at', 'desc')->get();
        $tests = json_decode($test,true);

        //検索機能
        $keyword = $request->input('keyword');
        $query = User::query();
        if (!empty($keyword)) {
            $query->where('name','like','%'.$keyword.'%');
        }
        $results = $query->orderBy('id','asc')->paginate(5);

        //いいね判定
        $nice_judgement = Nice::where('user_id',$id)->get();

        $data = [
            'items' => $items,
            'user' => $user,
            'acounts' => $acounts, 
            'tests' => $tests,
            'results' => $results,
            'nice_judgement' => $nice_judgement
        ];
        return view('welcome',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response    
     */
    public function create(Request $request)
    {
        EC::create([
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreECRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreECRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EC  $eC
     * @return \Illuminate\Http\Response
     */
    public function show($eC,Request $request)
    {
        $items = EC::all();
        $user = auth()->user();

        $acounts = User::all();
        $acount = User::find($eC);
        
        $tests = User::with('ecs')->find($eC)->ecs->sortByDesc('id');
        $count = User::with('ecs')->find($eC)->ecs->count();

        //いいね機能
        $nice = Nice::where('ec_id', $request->ec_id);

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
            'nice' => $nice,
            'count' =>  $count
        ];
        return view('private',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EC  $eC
     * @return \Illuminate\Http\Response
     */
    public function edit(EC $eC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateECRequest  $request
     * @param  \App\Models\EC  $eC
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateECRequest $request, EC $eC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EC  $eC
     * @return \Illuminate\Http\Response
     */
    public function destroy(EC $eC)
    {
        //
    }
}
