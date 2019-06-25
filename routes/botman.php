<?php
use App\Conversations\WelcomeConversation;
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

$botman = resolve('botman');

$botman->hears('/start', function ($bot) {
    $bot->startConversation(new WelcomeConversation());
})->stopsConversation();


//$botman->hears('/start', BotManController::class.'@startConversation');

$botman->hears('/about|about', function ($bot) {
    $bot->reply('O PantanalBot tem como objetivo auxiliar você usuário, a interagir melhor com nosso site.');
})->stopsConversation();


$botman->fallback(function($bot) {
    $bot->reply('Desculpe, eu não entendi esses comandos. Aqui está uma lista de comandos que eu entendo: /start|/about');
});


//$botman->hears('Start conversation', BotManController::class.'@startConversation');
