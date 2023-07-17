<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\LikeDislike;

class PostController extends Controller
{
    public function Posts()
    {
        $posts = Post::all();
        return view('forum.forumpage', compact('posts'));
    }

    // Likes
    public function likes()
    {
        return $this->hasMany('App\LikeDislike', 'post_id')->sum('like');
    }
    // Dislikes
    public function dislikes()
    {
        return $this->hasMany('App\LikeDislike', 'post_id')->sum('dislike');
    }

    public function save_likedislike(Request $request)
    {
        $data = new LikeDislike;
        $data->post_id = $request->post;
        if ($request->type == 'like') {
            $data->like = 1;
        } else {
            $data->dislike = 1;
        }
        $data->save();
        return response()->json([
            'bool' => true
        ]);
    }
}
