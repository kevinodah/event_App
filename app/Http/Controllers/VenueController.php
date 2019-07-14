<?php

namespace App\Http\Controllers;
use App\Venue;
use App\Event;
// use Auth;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function CreateVenue(Request $request, $id){
        // dd($request);
        $name_of_location = $request->name_of_location;
        $address = $request->address;
        $event = Event::find($id);
        $event->venues()->create(
            [
                'name_of_location' => $name_of_location,
                'address' => $address,
                'count' => 0,
            ]


        );
        return redirect()->route('event.plan', $id);
    }

    public function destroyvenue($venue_id, $event_id){
        // $event = Event::find($id);
        // $event->venues()->destroy();
        Venue::destroy($venue_id);
        return redirect()->route('event.plan', $event_id);

    }



}

