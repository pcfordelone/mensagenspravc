<?php

namespace FRD\Http\Controllers;

use FRD\Post;
use FRD\PostCategory;
use Illuminate\Http\Request;
use FRD\Http\Requests;
use FRD\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminPostsController extends Controller
{
    private $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->model->all();

        return view('admin.posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostCategory $postCategory)
    {
        $categories = $postCategory->lists('name','id');

        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $post = $this->model->fill($input);

        if (file_exists($request->file('img'))) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $image = uniqid("imagem_") . '.' . $extension;

            Storage::disk('public_local')->put($image, File::get($file));

            $post->image = $image;
            $post->img_extension = $extension;
        }

        $post->save();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCategory $postCategory, $id)
    {
        $post = $this->model->findOrNew($id);
        $categories = $postCategory->lists('name','id');

        return view('admin.posts.edit', compact('post','categories'));
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
        $post = $this->model->findOrNew($id);

        if (file_exists($request->file('img'))) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $image = $post->id . '.' . $extension;

            Storage::disk('public_local')->put($image, File::get($file));

            $post->image = $image;
            $post->img_extension = $extension;
        }

        $post->update($request->all(),$id);

        return redirect(route('admin.posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->findOrNew($id)->delete();

        return redirect(route('posts.index'));
    }

    public function imagesIndex($id)
    {
        $post = $this->model->findOrNew($id);

        return view('posts.image', compact('post'));
    }
}
