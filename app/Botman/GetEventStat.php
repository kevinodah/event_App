<?php

namespace App\Botman;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Auth;

class GetEventStat extends Conversation {
  protected $allEvents;
  public function report()
  {
    $user = Auth::user();
    $events = $user->events;
    $eventString = "";
    $this->allEvents = $events;
    
    for ($i = 0; $i < count($events); $i++){
      $eventString .= (string)$i+1 . ": " . $events[$i]->title . "<br /> <br /> ";
      $eventStringDetails .= (string)$i+1 . ": " . $events[$i]->description . "<br /> <br /> ";
      
    }
    $this->say($eventString);
    $this->reply($eventStringDetails);
    
  }

  // run
  public function run()
  {
    $this->report();
  }
}
