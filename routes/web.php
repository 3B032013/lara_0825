<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    // $post = new Post();
    // $post->title = 'test title';
    // $post->content = 'test content';
    // $post->save();

    // Post::create([
    //     'title' => 'test title2',
    //     'content' => 'test content2'
    // ]);

    // $post = Post::find(1);
    // echo '標題： '.$post->title.'<br>';
    // echo '內容： '.$post->content.'<br>';
    // dd($post);

    // $posts = Post::all();
    // foreach ($posts as $post){
    //     echo '編號： '.$post->id.'<br>';
    //     echo '標題： '.$post->title.'<br>';
    //     echo '內容： '.$post->content.'<br>';
    //     echo '張貼時間： '.$post->created_at.'<br>';
    //     echo '........................'.'<br>';
    // }
    // dd($posts);

    // $posts = Post::where('id','<',10)->orderBy('id','DESC')->get();
    // dd($posts);

    // $post = Post::find(1);
    // $post->update([
    //     'title' => 'updated title',
    //     'content' => 'updated content'
    // ]);

    // $post = Post::find(1);
    // $post->title = 'saved title';
    // $post->content = 'saved content';
    // $post->save();

    $post = Post::find(1);
    $post->delete();
});
