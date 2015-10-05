<?php

namespace FRD\Http\Controllers;

use FRD\Post;
use FRD\PostCategory;
use Illuminate\Http\Request;
use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post, PostCategory $category)
    {
        $categories = $category->all();
        $posts = $post->all();

        return view('site.index', compact('posts','categories'));
    }

    public function post(Post $post, $id, PostCategory $category)
    {
        $categories = $category->all();
        $post = $post->findOrNew($id);

        return view('site.post', compact('post', 'categories'));
    }

    public function categoryPosts($id, PostCategory $category)
    {
        $categories = $category->all();
        $posts = Post::where('category_id',$id)->get();

        return view('site.category_posts', compact('categories','posts'));
    }

}
