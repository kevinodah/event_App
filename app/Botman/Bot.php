<?php
namespace App\Botman;

use BotMan\BotMan\BotMan; 
use BotMan\BotMan\BotManFactory; 
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Web\WebDriver;
use BotMan\BotMan\Cache\LaravelCache; // The secret sauce
class Bot {
    protected $botman;
 
    public function __construct()
    {
        // if($this->getBotMan()==null){
            $config = [
                'conversation_cache_time' => 40, // Cache settings
                'user_cache_time' => 30, // Cache settings
                'web' => [ // Bringing in the web driver config
                    'matchingData' => [
                        'driver' => 'web',
                    ],
                ]
            ];
      
            DriverManager::loadDriver(WebDriver::class);
      
            $this->botman = BotManFactory::create($config, new LaravelCache(), app()->make('request'));
    }
 
    public function getBotMan()
    {
       return $this->botman; 

    }


}