<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Charts;

class HomeController extends Controller
{

    public function home() {

        $postsCount         = Post::count();
        $categoriesCount    = Category::count();

        return view('admin.dashboard.home', compact('postsCount', 'categoriesCount'));
    }

    public function statistics() {

        $postsChart         = Charts::database( Post::get(), 'bar', 'highcharts' )
                                    ->elementLabel("Posts")
                                    ->title('Posts Chart')
                                    ->dimensions(0, 200)
                                    ->groupByMonth();

        $categoriesChart    = Charts::database( Category::get(), 'bar', 'highcharts' )
                                    ->elementLabel("Categories")
                                    ->title('Categories Chart')
                                    ->dimensions(0, 200)
                                    ->groupByMonth();

        $postsCount         = Post::count();
        $categoriesCount    = Category::count();

        return view('admin.dashboard.statistics', compact('postsCount', 'postsChart', 'categoriesCount', 'categoriesChart'));
    }
}
