<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class SelectCursoConversation extends Conversation
{
    public function askService()
    {
        $question = Question::create('Qual curso está interessado?')
            ->callbackId('select_service')
            ->addButtons([
                Button::create('Culinária')->value('Culinária'),
                Button::create('Artesanato')->value('Artesanato'),
                Button::create('Dança')->value('Dança'),
            ]);
        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'service' => $answer->getValue(),
                ]);
                $this->bot->startConversation(new DateTimeConversation());
            }
        });
    }
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->askService();
    }
}
