<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\NewPostRequest;
use Illuminate\Http\Request;
use App\Post;
use Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:posts-management');
        $this->middleware('permission:view-posts')->only('details');
        $this->middleware('permission:add-posts')->only('create');
        $this->middleware('permission:edit-posts')->only( 'update');
        $this->middleware('permission:delete-posts')->only('delete');
    }

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('backend.posts.index', compact('posts'));
    }

    public function details(Post $post)
    {
        return view('backend.posts.details', compact('post'));
    }

    public function create(NewPostRequest $request)
    {
        $data = $request->only('title', 'caption', 'permalink', 'p_content');
        if ($request->hasFile('image')) {
            $fileExtension = $request->file('image')->getClientOriginalExtension();
            $fileName = time() . '.' . $fileExtension;
            Image::make($request->file('image'))->save('uploads/posts/' . $fileName);
            $data['image'] = $fileName;
        }
        Post::create($data);
        return back()->with('success', 'Post created successfully');
    }

    public function update(NewPostRequest $request, Post $post)
    {
        if ($request->isMethod('get')) {
            return view('backend.posts.edit', compact('post'));
        }
        $data = $request->only('title', 'caption', 'permalink', 'p_content');
        if ($request->hasFile('image')) {
            if (file_exists('uploads/posts/' . $post->image)) {
                unlink('uploads/posts/' . $post->image);
            }
            $fileExtension = $request->file('image')->getClientOriginalExtension();
            $fileName = time() . '.' . $fileExtension;
            Image::make($request->file('image'))->save('uploads/posts/' . $fileName);
            $data['image'] = $fileName;
        }
        $post->update($data);
        return redirect(route('admin.posts.index'))->with('success', 'Post updated successfully');
    }

    public function delete(Post $post)
    {
        if (file_exists('uploads/posts/' . $post->image)) {
            unlink('uploads/posts/' . $post->image);
        }
        $post->delete();
        return back()->with('success', 'Blog deleted successfully');
    }
}
