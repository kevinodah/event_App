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
            return redirect()->route('publish.verify');
          }
       
        
        return View('eventdetails.addeventdetails', compact('venues','times','costs', 'id'));
    }


   

    public function showSuggestionForm($id){
        $user = Auth::user();
        if($user->votes()->find($id)){
          return redirect()->route('vote.verify');
        }

        $publish = Event::find($id);
        $publishAdd = $publish->published;
        $publishAdd++;
        $publish->update(['published'=>$publishAdd]);

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
