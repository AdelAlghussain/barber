<?php

namespace App\Http\Controllers;

use App\Models\Worktime;
use App\Http\Requests\StoreworktimeRequest;
use App\Http\Requests\UpdateworktimeRequest;
use App\Http\Resources\WorkTimeResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WorktimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workTimes = Worktime::get();
        return view('dashboard.worktime.workTimes')->with('worktimes', $workTimes);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function worktimes()
    {
        $workTimes = Worktime::get();

        return  WorkTimeResource::collection($workTimes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empolyee  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $worktimes = Worktime::get();
        return view('dashboard.Worktime.editWorktime', ['worktimes' => $worktimes]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empolyee  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        logger($request->all());

        $workTimes = Worktime::get();


        $workTimes->each(function ($Worktime) use ($request) {

            $Worktime->update([
                'start_time' => $request->input($Worktime->day . '_start_time'),
                'close_time' => $request->input($Worktime->day . '_close_time')
            ]);
        });

        return redirect('/worktimes');

    }
}
