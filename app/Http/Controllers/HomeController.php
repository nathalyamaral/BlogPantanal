<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function premium(){
        $posts = Post::all();
        return view('premiumform', ['posts'=>$posts]);
    }

    public function sendNotification()
    {
        $user = User::first();
  
        $details = [
            'greeting' => 'Oi',
            'body' => 'Origado por se cadastra no Blog Pantanal',
            'actionText' => 'Blog',
            'actionURL' => url('/'),
            'order_id' => 101
        ];
  
        Notification::send($user, new EmailNotification($details));
   
        dd('done');
    }
}
