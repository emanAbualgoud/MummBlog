<?php

namespace App\Http\Controllers\Web;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hashids;

class HomeController extends Controller
{

    public function index() {

        $posts = Post::orderBy('id', 'DESC')->paginate(12);
        return view('web.home.index', compact('posts'));
    }

    public function getAbout() {

        return view('web.about');
    }

    public function showPost($postId) {

        $decodedId = Hashids::decode($postId);

        if($decodedId) {
            $post = Post::findOrFail($decodedId[0]);
            return view('web.posts.show', compact('post'));
        }
        abort('404');
    }

    public function categoryPosts($categoryId) {

        $decodedId = Hashids::decode($categoryId);

        if($decodedId) {
            $posts      = Post::whereCategoryId($decodedId[0])->paginate(12);
            $category   = Category::findOrFail($decodedId[0]);

            return view('web.posts.category_posts', compact('posts', 'category'));
        }
        abort('404');
    }
}
