<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Forum_topics;

class ForumController extends Controller
{
   public function Forum()
   {
      $data=Forum_topics::all();
      return view('forum.forumpage', compact('data'));
   }

   public function Chats()
   {
      return view('forum.chats');
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

      return redirect()->back()->with('success', 'Topic created successfully.');
   }
}
