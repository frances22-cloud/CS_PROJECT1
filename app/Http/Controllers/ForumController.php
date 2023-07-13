<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum_topics;
use App\Models\Chat;

class ForumController extends Controller
{
   public function Index()
   {
      $data=Forum_topics::all();
      return view('forum.forumpage', compact('data'));
   }

   public function Forum()
   {
      $data=Forum_topics::all();
      return view('forum.topicspage', compact('data'));
   }

   public function Chats()
   {    
      $chats=Chat::orderBy('created_at', 'asc')->get();
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
}
