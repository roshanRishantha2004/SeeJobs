<?php

use Illuminate\Support\Facades\Route;
use App\Models\Posts;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('posts', [
        'posts' => Posts::all()
    ]);
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/create/post', function(){
    return view('create');
});

Route::post('/create/post', function(Request $request){

    $request->validate([
        'title' => 'required|string|max:255',
        'tags' => 'required|string|max:255',
        'description' => 'required|string',
        'company' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'email' => 'required|email',
        'website' => 'nullable|url',
    ]);

    Posts::create($request);

    return redirect('/')->with('success', 'Job posted successfully!');
});

Route::get('/post/{post}', function(Posts $post){
    return view('post', [
        'post' => $post
    ]);
});
