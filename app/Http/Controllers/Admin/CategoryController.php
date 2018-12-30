<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() {

        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function show(Category $category) {

        return view('admin.categories.show', compact('category'));
    }

    public function create() {

        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request) {

        $category = Category::create($request->all());
        return $category ?
            redirect()->route('admin.categories.index')->with('success', 'Category Added Successfully.') :
            redirect()->route('admin.categories.index')->with('warning', 'Sorry Something Went Wrong, Please Try Again Later.');
    }

    public function edit(Category $category) {

        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category) {

        $updated = $category->update($request->all());
        return $updated ?
            redirect()->route('admin.categories.index')->with('success', 'Category Updated Successfully.') :
            redirect()->route('admin.categories.index')->with('warning', 'Sorry Something Went Wrong, Please Try Again Later.');
    }

    public function destroy(Request $request) {

        //*********** check-if-this-category-assigned-to-any-posts ***********//
        $postsCount = Post::whereCategoryId($request->id)->count();

        if( $postsCount > 0)
            return json_encode(['code' => '2', 'message' => "You can't delete this category, cuz it's related to one or more Posts"]);
        //*********** check-if-this-category-assigned-to-any-posts ***********//

        $deleted= Category::find($request->id)->delete();
        $url    = route('admin.categories.index');
        return $deleted
            ? json_encode(['code' => '1', 'url' => $url])
            : json_encode(['code' => '0', 'message' => 'Sorry something went wrong, please try later.']);
    }
}
