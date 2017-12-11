<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Carbon\Carbon;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // $books_table = DB::select('SELECT * FROM books_table');
        // return view('books.index')->with('books_table', $books_table); 
        // return view('posts.profile');
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'url' => 'required',
            'caption' => 'required'
        ]);

        $user = Auth::user();
        $url = $request->input('url');
        $caption = $request->input('caption');

        $postID = Redis::command('incr', ['next_post_id']);
        $commentID = Redis::command('incr', ['next_comments_id']);
        $likesID = Redis::command('incr', ['next_likes_id']);
        $result = Redis::command("hmset", ["post:$postID", "user_id", $user->id, "time", time(), "comments_id", $commentID,"url", $url, "caption", $caption, "likes_id", $likesID ]);

        return redirect('home')->with('success', 'Post successfully uploaded.');

        // $result = Redis::command('scan', [0]);
            //$result = Redis::command('scan', [0, "MATCH", "*post:*"]);
        // scan 176 MATCH *11*
        //$result = Redis::command('hget', ["post:8", "time"]);
            //return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
