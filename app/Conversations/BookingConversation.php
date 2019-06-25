<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class BookingConversation extends Conversation
{
    public function confirmBooking()
    {
        $user = $this->bot->userStorage()->find();
        $message = '------------------------------------------------ <br>';
        $message .= 'Nome : '.$user->get('name').'<br>';
        $message .= 'Email : '.$user->get('email').'<br>';
        $message .= 'Telefone : '.$user->get('mobile').'<br>';
        $message .= 'Curso : '.$user->get('service').'<br>';
        $message .= 'Dia : '.$user->get('date').'<br>';
        $message .= 'Horário : '.$user->get('timeSlot').'<br>';
        $message .= '------------------------------------------------';
        $this->say('Ótimo. Sua inscrição foi confirmada. Aqui estão os detalhes de sua inscrição. <br><br>'.$message);
    }
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->confirmBooking();
    }
}
