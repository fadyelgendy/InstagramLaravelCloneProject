<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    // authenicated user only
    public function __construct(){
        $this->middleware('auth');
    }
	// Create New Post
    public function create()
    {
    	return view('posts.create');
    }

    // Store That Post Just Created
    public function store() 
    {
        // validate data
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image']
        ]);

        // upload the image
        $imagePath= request('image')->store('uploads','public');// save it in uploads folder using localhost 
        $image = Image::make(public_path("storage/{$imagePath}"))->fit('1200', '1200');
        $image->save();
        // save post
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

    	return redirect('/profile/' . auth()->user()->id);
    }

    public function show (\App\Post $post) {
        dd($post);
        // return view('posts.show');
    }
}
