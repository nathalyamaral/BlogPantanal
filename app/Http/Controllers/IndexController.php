<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Pagination\Paginator;

class IndexController extends Controller
{

    public function index(Post $post,  Category $category)
    {
        $posts = Post::orderBy('categories_id', 'asc')->get();
        $categories = $category->all();
        $posts_cat =(array) null;
        $j = 0;
       	$k = 0;
        for ($i = 0; $i < count($posts); $i++) { 
        	if($categories[$k]->id == $posts[$i]->categories_id){
        		array_push($posts_cat, $posts[$i]);
        		if ($j == 1) {
        			$k++;
        		}elseif ($j == 3) {
        			$k++;
        		}elseif ($j == 4) {
        			$k++;
        		}elseif ($j == 7) {
        			$k++;
        		}
        		$j++;
        	}
        }

        $posts = Post::orderBy('categories_id', 'asc')->paginate(8);
        return view('index', compact('posts', 'categories', 'posts_cat'));
    }

}
