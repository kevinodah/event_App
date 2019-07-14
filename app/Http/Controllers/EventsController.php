<?php

namespace App\Http\Controllers;
use App\Event;
use Auth;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function AddEventForm(){
        return View('event.addevent');
    }
    
    public function AddEvent(Request $request){
        // dd($request);
        $title = $request->title;
        $description = $request->description;
        $contact = $request->contact;
        $published = $request->published;
        $user = Auth::user();
        $user->events()->create(
            [
            'title' => $title,
            'description' => $description,
            'contact' => $contact,
            'published' => 0
            ]
        );
        return redirect()->route('events');
    }

    public function ShowEvent(){
        $user = Auth::user();
        $events = $user->events;
        return View('event.events', compact('id','events'));
    }

    public function ShowEditEventForm($id){
        $event = Event::find($id);
        return View('event.updateevent', compact('id', 'event'));
    }

    public function UpdateEvent(Request $request, $id){
        $title = $request->title;
        $description = $request->description;
        $contact = $request->contact;
        $event = Event::find($id);
        $event->update(
            [
                'title' => $title,
                'description' => $description,
                'contact' => $contact,

            ]
        );
        return redirect()->route('events');
    }

    public function destroy($id){
        Event::destroy($id);
        return redirect()->route('events');

        
    }
}
