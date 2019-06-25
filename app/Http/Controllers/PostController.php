<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Exibir uma listagem do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts', ['posts'=>$posts]);
    }

    public function indexPostsDeleted()
    {
        $posts = Post::onlyTrashed()->get();
        return view('admin.delete_post', ['posts'=>$posts]);
    }

    public function blogsingle(Request $request, Category $category)
    {
        $id = $request->id;
        $posts = Post::where('id', $id)->get();
        $categories = $category->all();
        $comments = Comment::where('posts_id', $id)->get();
        return view('blogsingle', compact('posts', 'categories', 'comments'));
    }

    public function postsession(Post $post){
        $posts = Post::all();
        return view('home', compact('posts'));
    }
    /**
     * Mostrar o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $roles = Role::all();
        return view('admin.add_post', ['categories'=>$categories, 'tags'=>$tags, 'roles'=>$roles]);
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            
            return redirect()->route('admin.form-add-post')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->hasFile('image_slug')){
            $request['image_slug'] = $this->addImageStorage($request, $slugImage = 'slug', $post = null, $comment = null);
        }
        $request['users_id'] = Auth::id();
        $request['body'] = $this->addImageStorage($request, $slugImage = null, $post = 'post', $comment = null);
        $post = new Post($request->all());

        $post->save();

    
        $post->tags()->sync($request['tags'], false);
        $posts = Post::all();
        return back()->with('success','Post cadastrado com sucesso!');
        //return redirect()->route('admin.posts');

    }

    /**
     * Exibe o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.view_post', ['post' => $post]);
    }

    /**
     * Mostrar o formulário para editar o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::findOrFail($id);
        return view('admin.edit_post', ['post' => $post, 'categories'=>$categories, 'tags'=>$tags]);
    }

    /**
     * Atualize o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);
        
        $post = Post::find($request->id);

        if ($validator->fails()) {
            
            return redirect()->route('admin.form-edit-post', ['id' => $post->id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $pathSlug = $this->addImageStorage($request, $slugImage = 'slug', $post = null, $comment = null);
        $request['image_slug'] = "$pathSlug";
        $request['body'] = $this->addImageStorage($request, $slugImage = null, $post = 'post', $comment = null);
        
        $post = Post::find($request->id);

        $post->update($request->all());

        if(isset($request['tags'])){
            $post->tags()->sync($request['tags']);
        }else{
            $post->tags()->sync(array());
        }
       
        return back()->with('info','Post editado com sucesso!');
        //return redirect()->route('admin.posts');
    }

    public function delete($idPost)
    {
        $post = Post::find($idPost);

        /*passando para acl de update verificacao a informacao que quero verificar (O POST) */
        $this->authorize('deletePost', $post);
        return view('post-delete', compact('post'));
    }

    /**
     * Remova o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $sucess = $post->delete();

        if($sucess==true)
        {
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }

    public function destroyPostPermanent($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        if($post->deleted_at != null){
            $post->forceDelete();
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }

    public function restorePost($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        if($post->deleted_at != null){
            $post->restore();
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
