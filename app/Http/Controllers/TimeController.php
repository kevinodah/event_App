<?php

namespace App\Http\Controllers;
use App\Time;
use App\Event;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function createTime(Request $request, $id){
        // dd($request);
        $time_start = $request->time_start;
        $time_stop = $request->time_stop;
        $event = Event::find($id);
        $event->times()->create(
            [
                'time_start' => $time_start,
                'time_stop' => $time_stop,
                'count' => 0,
            ]
        );
        return redirect()->route('event.plan', $id);
    }


    public function destroytime($time_id, $event_id){
        // $event = Event::find($id);
        // $event->venues()->destroy();
        Time::destroy($time_id);
        return redirect()->route('event.plan', $event_id);

    }

}
