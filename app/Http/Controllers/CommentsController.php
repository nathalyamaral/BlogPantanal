<?php
 
namespace App\Http\Controllers;
 
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
 
class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 
 
    public function store(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
    
        $request['users_id'] = Auth::id();
        $request['posts_id'] = $post->id;
        $comment = new Comment($request->all());

        $comment->save();
        $pathToFile = public_path($post->image_slug); 

        Mail::send('emails.comment', ['post' => $post, 'comment' => $comment,  'pathToFile' => $pathToFile], function($message) use ($post)
            {
                $message->from('no-reply@site.com', "Blog Panatnal");
                $message->subject("Sua postagem recebeu um novo comentário");
                $message->to($post->user->email);
            });

        return redirect()->route('blogsingle', $post->id);
    }
}