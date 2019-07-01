<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Achievement;
use App\Http\Controllers\Controller;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Achievement::all();
        return $result;
    }

    /**
     * updateOrCreate
     *
     * @param  \Illuminate\Http\Request  $request [{runner_id: 1, rank: 3}]
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestArray = $request->all();//$requestを配列として取得
        foreach($requestArray as $requestRecord) {
            //request
            $runner_id = $requestRecord['runner_id'];
            $rank = $requestRecord['rank'];

            //初期化
            $race_count = 1;
            $rank1_count = $rank === 1 ? 1 :0;
            $rank2_count = $rank === 2 ? 1 :0;
            $rank3_count = $rank === 3 ? 1 :0;
            $rank4_count = $rank === 4 ? 1 :0;
            $rank5_count = $rank === 5 ? 1 :0;

            //既存レコードがある場合は上書き
            $isRecord = Achievement::where('runner_id', $runner_id)->exists();
            if($isRecord) {
                $race_count = $race_count + Achievement::where('runner_id', $runner_id)->value('race_count');
                $rank1_count = $rank1_count + Achievement::where('runner_id', $runner_id)->value('rank1_count');
                $rank2_count = $rank2_count + Achievement::where('runner_id', $runner_id)->value('rank2_count');
                $rank3_count = $rank3_count + Achievement::where('runner_id', $runner_id)->value('rank3_count');
                $rank4_count = $rank4_count + Achievement::where('runner_id', $runner_id)->value('rank4_count');
                $rank5_count = $rank5_count + Achievement::where('runner_id', $runner_id)->value('rank5_count');
            }

            // 勝率
            $win_rate = $rank1_count * 100 / $race_count;

            Achievement::updateOrCreate(
                ['runner_id' => $runner_id],
                [
                    'race_count' => $race_count,
                    'rank1_count' => $rank1_count,
                    'rank2_count' => $rank2_count,
                    'rank3_count' => $rank3_count,
                    'rank4_count' => $rank4_count,
                    'rank5_count' => $rank5_count,
                    'win_rate' => $win_rate
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
