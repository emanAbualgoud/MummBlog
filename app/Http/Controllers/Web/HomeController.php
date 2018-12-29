<?php

namespace App\Http\Controllers\Web;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index() {

        $posts = Post::orderBy('id', 'DESC')->paginate(12);
        return view('web.home.index', compact('posts'));
    }

    public function getAbout() {

        return view('web.about');
    }
}
