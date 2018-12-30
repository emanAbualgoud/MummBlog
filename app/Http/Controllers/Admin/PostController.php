<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {

        $posts      = Post::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->select('name', 'id')->get();

        return view('admin.posts.index', compact('posts', 'categories'));
    }

    public function show(Post $post) {

        return view('admin.posts.show', compact('post'));
    }

    public function create() {

        $categories = Category::orderBy('id', 'DESC')->select('name', 'id')->get();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(PostRequest $request) {

        if ( isset($request->photo) && $request->photo )
            $request['image'] = UploadImage($request->file('photo'), 'posts', '/uploads/posts');

        $post = Post::create($request->all());
        return $post ?
            redirect()->route('admin.posts.index')->with('success', 'Post Added Successfully.') :
            redirect()->route('admin.posts.index')->with('warning', 'Sorry Something Went Wrong, Please Try Again Later.');
    }

    public function edit(Post $post) {

        $categories = Category::orderBy('id', 'DESC')->select('name', 'id')->get();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(PostRequest $request, Post $post) {

        if ( isset($request->photo) && $request->photo ) {
            $request['image'] = UploadImage($request->file('photo'), 'posts', '/uploads/posts');
            @unlink(public_path('uploads/posts/') . $post->image);
        }

        $updated = $post->update($request->all());
        return $updated ?
            redirect()->route('admin.posts.index')->with('success', 'Post Updated Successfully.') :
            redirect()->route('admin.posts.index')->with('warning', 'Sorry Something Went Wrong, Please Try Again Later.');
    }

    public function destroy(Request $request) {

        $post = Post::find($request->id);

        if (isset($post->image) && $post->image != '') {
            @unlink(public_path('uploads/posts/') . $post->image);
        }
        $deleted= $post->delete();
        $url    = route('admin.posts.index');
        return $deleted
            ? json_encode(['code' => '1', 'url' => $url])
            : json_encode(['code' => '0', 'message' => 'Sorry something went wrong, please try later.']);
    }
}
