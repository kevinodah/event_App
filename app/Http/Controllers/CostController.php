<?php

namespace App\Http\Controllers;
use App\Cost;
use App\Event;

use Illuminate\Http\Request;

class CostController extends Controller
{
    public function createCost(Request $request, $id){
        // dd($request);
        $price = $request->price;
        $details = $request->details;
        $event = Event::find($id);
        $event->costs()->create(
            [
                'price' => $price,
                'details' => $details,
                'count' => 0,
            ]
        );
        return redirect()->route('event.plan', $id);
    }

    public function destroycost($cost_id, $event_id){
        Cost::destroy($cost_id);
        return redirect()->route('event.plan', $event_id);
    }
    
}
