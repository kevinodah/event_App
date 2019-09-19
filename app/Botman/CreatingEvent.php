<?php

namespace App\Botman;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Auth;
class CreatingEvent extends Conversation
{
  protected $event;
  protected $eventdescr;
  protected $phonenumber;

  public function askEventName()
  {
    $this->ask('Hello, what is the name of your event?', function(Answer $answer) {
      $this->event = $answer->getText();
      $this->say('Thank you');
      $this->askEventDescr();
    });
  }

  public function askEventDescr(){
    $this->ask('What is the Description of your event?', function(Answer $answer){
      $this->eventdescr = $answer->getText();
      $this->say('Thank you Once Again, one more thing');
      $this->askNumber();
    });
  }

  public function askNumber(){
    $this->ask('What is your phone-number?', function(Answer $answer){
      $this->phonenumber = $answer->getText();
      $this->say('Thank you, please hold on, we\'re now creating your event...');
      $user = Auth::user();
        $user->events()->create(
            [
            'title' => $this->event,
            'description' => $this->eventdescr,
            'contact' => $this->phonenumber,
            'published' => 0
            ]
        );

      $this->say('Thank you for your patience, your event has been created ✅, please refresh this page to view view your newly created event 😊');
      $this->say('Just a reminder!, you can also use the second command \'report\' without the qoutes to get the stats of an event');
    });
  }
  
  public function run()
  {
    $this->askEventName();
  }
}