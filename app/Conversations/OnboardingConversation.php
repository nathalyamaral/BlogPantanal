<?php

namespace App\Conversations;

use Validator;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\SelectCursoConversation;
use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{   
    public function askName()
    {
        $this->ask('Qual é o seu nome?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'name' => $answer->getText(),
            ]);
            $this->say('Prazer em conhecê-lo '.$answer->getText());
            $this->askEmail();
        });
    }
    public function askEmail()
    {
        $this->ask('Qual é o seu email?', function (Answer $answer) {
            $validator = Validator::make(['email' => $answer->getText()], [
                'email' => 'email',
            ]);
            if ($validator->fails()) {
                return $this->repeat('Isso não parece um email válido. Por favor digite um email válido.');
            }
            $this->bot->userStorage()->save([
                'email' => $answer->getText(),
            ]);
            $this->askMobile();
        });
    }
    public function askMobile()
    {
        $this->ask('Ótimo. Qual é o seu celular?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'mobile' => $answer->getText(),
            ]);
            $this->say('Ótimo!');
            $this->bot->startConversation(new SelectCursoConversation());
        });
    }
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->askName();
    }
}
