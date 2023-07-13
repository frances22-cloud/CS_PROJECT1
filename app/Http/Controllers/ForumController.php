<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Forum_topics;
use App\Models\Chat;
use App\Models\Post;
use App\Models\forum_comment;
use App\Models\forum_reply;


class ForumController extends Controller
{
   public function Index()
   {
      $data = Forum_topics::all();
      return view('forum.forumpage', compact('data'));
   }

   public function Forum()
   {
      $data = Forum_topics::all();
      return view('forum.topicspage', compact('data'));
   }

   public function Chats()
   {
      $chats = Chat::orderBy('created_at', 'asc')->get();
      return view('forum.chats', compact('chats'));
   }

   public function add_chat(Request $request)
   {
      $chat = new Chat();
      $chat->message = $request->message;

      $chat->save();

      return redirect()->back()->with('message', 'Chat added successfully.');
   }

   public function Topics()
   {
      return view('forum.addtopic');
   }

   public function add_topic(Request $request)
   {
      $data = new Forum_topics();
      $data->name = $request->name;
      $data->topic_title = $request->topic_title;
      $data->topic_message = $request->topic_message;

      $data->save();

      return redirect()->back()->with('message', 'Topic created successfully.');
   }

   public function add_posts(Request $request)
   {
      $posts = new Post();
      $posts->likes = $request->likes;
      $posts->dislikes = $request->dislikes;

      $posts->save();
   }

   public function Posts()
   {
      $posts = Post::all();
      return view('forum.forumpage', compact('posts'));
   }

   public function Comments()
   {
      $comment = forum_comment::all();

      return view('forum.comments', compact('comment', 'reply'));
   }

   public function add_comment(Request $request)
   {
      if (Auth::id()) {

         $comment = new forum_comment();
         $comment->name = Auth::user()->name;
         $comment->user_id = Auth::user()->id;
         $comment->comment = $request->comment;
         $comment->save();
         return redirect()->back();
      } else {
         return redirect('login');
      }
   }

   public function add_reply(Request $request)
   {
      if (Auth::id()) {

         $reply = new forum_reply();
         $reply->name = Auth::user()->name;
         $reply->user_id = Auth::user()->id;
         $reply->comment_id = $request->commentId;
         $reply->reply = $request->reply;
         $reply->save();
         return redirect()->back();
      } else {
         return redirect('login');
      }
   }

   public function show_reply()
   {
      $reply = forum_reply::all();

      return view('forum.comments', compact('reply'));
   }
}
