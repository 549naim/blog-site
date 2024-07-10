<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use DataTables;

class BlogController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except(['admin_login', 'post_admin_login']);
    }

    public function index()
    {
        return view('admin.index');
    }

    public function create_post(){
        $categories = Category::all();
        return view('admin.create_post',compact('categories'));
    }

    public function category_list(){
        $categories = Category::all();
        return view('admin.category_list', compact('categories'));

        
    }

    public function create_category(){
        return view('admin.create_category');
    }

    public function store_category(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return back()->with('success', 'Category created successfully');
    }

    public function store_post(Request $request){
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->image = $imageName;
        $post->tags = implode(',', $request->tags);
        $post->user_id = auth()->user()->id;
        $post->save();
    }
}
