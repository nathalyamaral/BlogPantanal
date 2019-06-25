<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\OnboardingConversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class WelcomeConversation extends Conversation
{

    private function welcomeUser()
    {
        $this->say('Olá '.$this->bot->getUser()->getFirstName().' 👋');
        $this->askIfReady();
    }

    private function askIfReady()
    {
	$question = Question::create('Bem-vindo ao *BotPantanal*! Estou aqui para auxiliar você a se inscrever para algum de nossos cursos. Tem interesse em participar?')
		->addButtons([
			Button::create('Sim')->value('yes'),
			Button::create('Não')->value('no'),
		]);
	
	$this->ask($question, function (Answer $answer) {
		if ($answer->getValue() === 'yes') {
			$this->say('Perfeito!');
			return $this->bot->startConversation(new OnboardingConversation());
		}
	
		$this->say('😒');
		$this->say('Tudo bem, se você mudar de opinião, poderá me chamar a qualquer momento usando o comando /start ou digitando "start".');
	});
    }

    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->welcomeUser();
    }
}