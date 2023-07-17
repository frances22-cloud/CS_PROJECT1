<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Forum_topics;
use App\Models\Chat;
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
      $tdata = Forum_topics::all();
      return view('forum.topicspage', compact('tdata'));
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
      if (Auth::id()) {
         $data = new Forum_topics();
         $data->name = Auth::user()->name;
         $data->topic_title = $request->topic_title;
         $data->topic_message = $request->topic_message;

         $data->save();

         return redirect()->back()->with('message', 'Topic created successfully.');
      } else {
         return redirect()->back()->with('message', 'Topic created successfully.');
      }
   }

   public function Comments()
   {
      $fcomment = forum_comment::all();

      return view('forum.comments', compact('fcomment'));
   }

   public function add_comment(Request $request)
   {
      if (Auth::id()) {

         $fcomment = new forum_comment();

         $fcomment->name = Auth::user()->name;
         $fcomment->user_id = Auth::user()->id;

         $fcomment->comment = $request->comment;
         $fcomment->save();

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

   public function Search(Request $request)
   {
      $search = $_GET['search'];
      $tdata = Forum_topics::where('topic_title','LIKE', '%'.$search.'%')->get();
      
      return view('forum.forumpage', compact('tdata'));
   }

}
