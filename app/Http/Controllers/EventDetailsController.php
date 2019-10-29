<?php

namespace App\Http\Controllers;
use App\Venue;
use App\Time;
use App\Cost;
use App\Event;
use Auth;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    public function addEventPlan(Request $request, $id){
        //Create Details of an Event;
        $event = Event::find($id);
        $venues = $event->venues;
        $times = $event->times;
        $costs = $event->costs;

        // $publishid = $request->publish;


        if($event->published == 1){
            return redirect()->route('events')->with('error', 'Sorry, but you cannot add more information to this event after you\'ve published it, Thanks.');
        }
        return View('eventdetails.addeventdetails', compact('venues','times','costs', 'id'));
    }

    public function updatepublished($id) {
        $publish = Event::find($id);
        $publishAdd = $publish->published;
        $publishAdd = 1;
        $publish->update(['published'=>$publishAdd]);
        return redirect()->route('events')->with('success', 'Your event has been published succesfully!, click on the share button to start sharing!.');
    }

    public function showSuggestionForm($id){
        $user = Auth::user();
        if($user->votes()->find($id)){
          return redirect()->route('vote.verify');
        }

        
        $event = Event::find($id);
        $venues = $event->venues;
        $times = $event->times;
        $costs = $event->costs;
        return View('eventdetails.suggestion', compact('venues', 'times', 'costs', 'id'));
    }

    public function voted(Request $request, $id){
        $user = Auth::user();
        $user->votes()->attach($id);

        $venueid = $request->venue;
        $venue = Venue::find($venueid);
        $venueVote = $venue->count;
        $venueVote++;
        $venue->update(['count'=>$venueVote]);
        // dd($venue->count);
        
        
        
        
        $timeid = $request->time;
        $time = Time::find($timeid);
        $timeVote = $time->count;
        $timeVote++;
        $time->update(
            [
                'count' => $timeVote
            ] 
        );
        // dd($time->count);    

        $costid = $request->cost;
        $cost = Cost::find($costid);
        $costVote = $cost->count;
        $costVote++;
        $cost->update(
            [
                'count' => $costVote
            ]
        );
        // dd($cost->count);
        return View('eventdetails.voted');

    }
    
  
    public function reports($id){
        $event = Event::find($id);
        $venues = $event->venues;
        $times = $event->times;
        $costs = $event->costs;
        return View('eventdetails.reports', compact('venues', 'times', 'costs', 'id'));
    }
      public function verifyvote(){
            return View('eventdetails.verifyvote');
    }

    public function published(){
        return View('event.verifyevent');
    }
}
