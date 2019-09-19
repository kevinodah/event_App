<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan; 
use BotMan\BotMan\BotManFactory; 
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Web\WebDriver;
use BotMan\BotMan\Cache\LaravelCache;
use App\Botman\Bot;
use App\Botman\CreatingEvent;
use App\Botman\GetEventStat;

class BotController extends Controller
{
    protected $botman;

    public function botmanchatserver(){
        $bot = new Bot();
        $botman = $bot->getBotMan();

        // Event class
           $botman->hears('start', function(Botman $bot) {
            $bot->startConversation(new CreatingEvent);
            });

            $botman->hears('report', function(Botman $bot) {
                $bot->startConversation(new GetEventStat);
                });

            $botman->listen();

   }
}
