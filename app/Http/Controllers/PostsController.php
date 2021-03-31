<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Comment;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp,gif,svg,mp4|max:2048',
        ]);

        $input = $request->all();

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('storage'), $imageName);

        Post::create($input);

        return redirect()->route('posts.index')->with('success', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        return view('post.show',
        [
        'post' => Post::orderBy('created_at','DESC')->findorFail($id),
        'categories' => Category::all(),
        'comments'=>Comment::where('post_id', $id)->orderBy('created_at','DESC')->get(),
        'latestcomments'=>Comment::limit(3)->where('post_id', $id)->orderBy('created_at','DESC')->get(),
        'posts'=>Post::limit(2)->orderby('created_at','DESC')->get()->all(),
        'popular'=>Post::limit(5)->orderby('created_at','DESC')->get()->all(),
        ]
    );


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function PostPage(){





        return view('post.index',
        [

        //'cat'=>Post::with('category')->where('category_id')->get(),
        'categories' => Category::all(),
        'post'=>Post::orderBy('created_at', 'desc')->paginate(2),
        'posts'=>Post::limit(2)->orderby('created_at','DESC')->get()->all(),
        ]);
    }
}

