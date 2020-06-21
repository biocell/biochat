<?php
   require_once 'vendor/autoload.php';

   use BotMan\BotMan\BotMan;
   use BotMan\BotMan\BotManFactory;
   use BotMan\BotMan\Drivers\DriverManager;
   
   $config = [
    //input your device specific configuration
    //"slack" => [
    //  "token" =>"1333 yen yen yen"
   //]
];

   DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

   $botman = BotManFactory::create($config);

  // Give the bot something to listen for.
$botman->hears('Hello', function (BotMan $bot) {
    $bot->reply('Hello too');
});
$botman->hears('good morning', function (BotMan $bot) {
    $bot->reply('Good Morning');
});

$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands.try:\'Hello\', \'good morning\' ');
});

// Start listening
$botman->listen();

?>