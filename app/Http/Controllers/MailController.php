<?php

namespace App\Http\Controllers;

use App\Mail\SendMailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function inbox()
    {
        return view('admin.mail_inbox');
    }

    public function compose()
    {
        return view('admin.mail_compose');
    }
    
    public function send(Request $request)
    {
        Mail::to($request->email)->send(new SendMailUser($request));
        
        if (Mail::failures()) {
            return redirect()->route('admin.inbox')
            ->with('error','Não foi possível enviar seu email!');
        }else{
            return redirect()->route('admin.inbox')
            ->with('success','Email enviado com sucesso!');
        }
    }
}
