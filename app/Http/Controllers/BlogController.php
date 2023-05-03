<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\File;
use App\Http\Requests\EditBlogRequest;

class BlogController extends Controller
{

    public function category(Category $category){
        $categories = Category::all();
        $blogs = Blog::with('categories')->where('category_id', '=', $category->id)->paginate(8);
        return view('categories', compact('blogs', 'categories', 'category'));
    }

    public function blog(){
        $categories = Category::all();
        $blogs = Blog::with('categories')->limit(3)->get();
        $newBlogs = Blog::with('categories')->where('trending', '=', 1)->limit(6)->get();
        return view('welcome', compact(['blogs', 'categories', 'newBlogs']));
    }

    public function showBlog(Blog $blog){
        $categories = Category::all();
        return view('show', compact(['blog', 'categories']));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::withTrashed()->with('categories')->paginate(4);
        return view('blogs.index', compact(['blogs']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $blog = new Blog();

        $blog->title = $request->title;
        $blog->story = $request->story;
        $blog->category_id = $request->category;
        $intval = intval($request->trending);
        $blog->trending = $intval;

        if($request->image){
            $imageName = Str::random(10). '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $blog->image = $imageName;
        }

        if(!$blog->save()) return redirect()->route('blogs.create')->with('error', 'Something went wrong!!');
        return redirect()->route('blogs.index')->with('success', 'Blog created!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('blogs.edit', compact(['blog', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditBlogRequest $request, Blog $blog)
    {
        if ($request->image) {
            $imageName = Str::random(10). '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $oldImagePath = public_path($request->currentPhoto);

            if (File::exists($oldImagePath)) File::delete($oldImagePath);
        } else {
            $imageName = $request->currentPhoto;
        }
        $intval = intval($request->trending);

        $blog->title = $request->title;
        $blog->story = $request->story;
        $blog->image = $imageName;
        $blog->trending = $intval;
        $blog->category_id = $request->category;
        
        
        if (!$blog->save()) return redirect()->route('blogs.edit', $blog->id)->with('error', 'Something went wrong!!');


        return redirect()->route('blogs.edit', $blog->id)->with('success', 'Blog updated!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $image = public_path('images/'.$blog->image);

        if (!$blog->delete()) {
            return redirect()->route('blogs.index')->with('error', 'Blog could not be deleted!!');
        }
        // if (File::exists($image)) File::delete($image);

        return redirect()->route('blogs.index')->with('success', 'Blog deleted!!');

    }

    public function restore($id){
        Blog::withTrashed()->find($id)->restore();
  

        return redirect()->route('blogs.index')->with('success', 'Blog restored!!');
    } 
}
