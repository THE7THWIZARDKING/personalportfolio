<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $latestProjects = Project::latest()->take(3)->get();
        $latestPosts = BlogPost::latest()->take(3)->get();

        return view('frontend.index', compact('latestProjects', 'latestPosts'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function projects()
    {
        $projects = Project::latest()->paginate(9);
        return view('frontend.projects', compact('projects'));
    }

    public function blog()
    {
        $posts = BlogPost::latest()->paginate(6);
        return view('frontend.blog', compact('posts'));
    }

    public function blogShow($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return view('frontend.blog-show', compact('post'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        \App\Models\Message::create($validated);

        return back()->with('success', 'Message sent successfully!');
    }
}

