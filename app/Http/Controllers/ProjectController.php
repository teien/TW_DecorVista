<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
class ProjectController extends Controller
{
    public function post_comment()
    {

        request()->validate([
            'comment' => 'required|string|max:500', 
        ]);

        $data = request()->only('comment');
        $data ['user_id'] = auth() -> id();
        $data['username'] = auth()->user()->name; 

        
       if (Reviews::create($data)) {
            return redirect()->back()->with('success', 'Comment posted successfully!');
        }

        
        return redirect()->back()->with('error', 'Failed to post comment.');
    }



    public function show_comment($comments)
{
    $comments = Review::all(); 
    return view('dashboard.homeowner.pages.projectdetail', compact('comments'));
}
}
