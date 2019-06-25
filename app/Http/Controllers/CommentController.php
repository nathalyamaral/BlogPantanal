<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::findOrFail($request->post);
        $request['users_id'] = Auth::id();
        $request['posts_id'] = $post->id;
        $request['body'] = $this->addImageStorage($request, $slugImage = null, $post = null, $comment = 'comment');
        $comment = new Comment($request->all());

        $comment->save();
        $post = Post::findOrFail($request->post);
        //$pathToFile = public_path($post->image_slug); 
        Mail::send('emails.comment', ['post' => $post, 'comment' => $comment], function($message) use ($post)
        {
            $message->from('no-reply@site.com', "Blog Panatnal");
            $message->subject("Sua postagem recebeu um novo comentário");
            $message->to($post->user->email);
        });

        return redirect()->route('blogsingle', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
