<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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

    public function post_list(){
        $posts = Post::select('id', 'title', 'category_id')->get();
        return view('admin.post_list', compact('posts'));
    }

    public function category_list(){
        $categories = Category::all();
        return view('admin.category_list', compact('categories'));

        
    }

    public function edit_category($id){
        $category = Category::find($id);
        return view('admin.edit_category', compact('category'));
    }

    public function update_category(Request $request, $id){
        $request->validate([
            'name' => 'required'
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return back()->with('success', 'Category updated successfully');
    }

    public function delete_category($id){
        $category = Category::find($id);
        $category->delete();
        return back()->with('success', 'Category deleted successfully');
    }



    public function tag_list(){
        $tags = Tag::all();
        return view('admin.tag_list', compact('tags'));

        
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


    public function edit_tag($id){
        $tag = Tag::find($id);
        return view('admin.edit_tag', compact('tag'));
    }

    public function update_tag(Request $request, $id){
        $request->validate([
            'name' => 'required'
        ]);
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();
        return back()->with('success', 'Tag updated successfully');
    }

    public function delete_tag($id){
        $tag = Tag::find($id);
        $tag->delete();
        return back()->with('success', 'Tag deleted successfully');
    }






    public function create_tag(){
        return view('admin.create_tag');
    }

    public function store_tag(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
       
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        return back()->with('success', 'Tag created successfully');
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
        $post->tag_id = implode(',', $request->tags);
        $post->heading = 1;
        $post->breaking= 1;
        $post->latest = 1;
        $post->user_id = auth()->user()->id;
        $post->save();
        return back()->with('success', 'Post created successfully');
    }


    public function edit_post($id){
        $post = Post::find($id);
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.edit_post', compact('post', 'categories', 'tags'));
    }

    public function update_post(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'tags' => 'array',
        'tags.*' => 'exists:tags,name',
        'content' => 'required',
        'heading' => 'required|boolean',
        'latest' => 'required|boolean',
        'publish' => 'required|boolean',
        'breaking' => 'required|boolean',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $post = Post::findOrFail($id);
    $post->title = $request->title;
    $post->category_id = $request->category_id;
    $post->content = $request->content;

    // Handle image upload
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('public/posts');
        $post->image = basename($path);
    }

    // Handle the new fields
    $post->heading = $request->heading;
    $post->latest = $request->latest;
    $post->published = $request->publish;
    $post->breaking = $request->breaking;

    // Update tags
    $post->tag_id = implode(',', $request->tags);

    $post->save();

    return redirect()->route('edit_post', $post->id)->with('success', 'Post updated successfully!');
}

}
