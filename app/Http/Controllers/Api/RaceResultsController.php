<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\RaceResult;
use App\Http\Controllers\Controller;

class RaceResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 最新レコードを返す
     */
    public function index()
    {
        $result = RaceResult::latest()->take(3)->get()->sortBy('created_at')->values();
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // レースリザルトを登録
        $raceResult = new RaceResult;
        $raceResult->rank1 = $request->rank1;
        $raceResult->rank2 = $request->rank2;
        $raceResult->rank3 = $request->rank3;
        $raceResult->rank4 = $request->rank4;
        $raceResult->rank5 = $request->rank5;
        $raceResult->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = RaceResult::find($id);
        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
