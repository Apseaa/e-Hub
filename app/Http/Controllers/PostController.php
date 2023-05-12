<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Post;
use App\Models\Content_data;

class PostController extends Controller
{
//     public function create()
// {
//     return view('posts.create');
// }

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'category' => 'required',
        'tags' => 'required',
        'reference' => 'required',
        'description' => 'required',
    ]);

    $post = new Content_data();
    $post->title = $request->input('title');
    $post->category = $request->input('category');
    $post->tags = $request->input('tags');
    $post->reference = $request->input('reference');
    $post->description = $request->input('description');
    // $post->user_id = auth()->id();
    $post->save();

    return redirect()->route('posts.index')->with('success', 'Post created successfully.');
}
    public function index()
    {
        $android_table = Content_data::all();
        $android_table = Content_data::paginate(10);
        return view('posts.index', compact('android_table'));
        // return view('posts.index', ['posts' => $posts]);
    }

    public function edit($id)
{
    $post = Content_data::findOrFail($id);
    return view(['post' => $post]);
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|max:255',
        'category' => 'required|max:255', // add category validation rule
        'tags' => 'required|max:255', // add tags validation rule
        'reference' => 'required|max:255', // add reference validation rule
        'description' => 'required',
    ]);

    $post = Content_data::findOrFail($id);
    $post->title = $request->input('title');
    $post->category = $request->input('category');
    $post->tags = $request->input('tags');
    $post->reference = $request->input('reference');
    $post->description = $request->input('description');
    $post->save();

    return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
}


public function destroy($id)
{
    $post = Content_data::findOrFail($id);
    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
}


public function search(Request $request)
{
    $search = $request->input('search');
    $android_table = Content_data::where('title', 'like', "%$search%")
                            ->orWhere('description', 'like', "%$search%")
                            ->paginate(10);

    $posts = Content_data::where('title', 'like', "%$search%")
                  ->orWhere('description', 'like', "%$search%")
                  ->paginate(10);

    return view('posts.index', ['posts' => $posts, 'android_table' => $android_table]);
}


public function show($id)
{
    $post = Content_data::findOrFail($id);
    return view('posts.show', compact('post'));
}
}


    // public function store(Request $request)
    // {
    // $post = new Post;
    // $post->title = $request->title;
    // $post->content = $request->content;
    // $post->save();

    // return redirect()->route('posts.index');
    // }

// public function search(Request $request)
// {
//     $search = $request->input('search');
//     $posts = Post::where('title', 'like', "%$search%")
//                   ->orWhere('description', 'like', "%$search%")
//                   ->paginate(10);

//     return view('posts.index', ['posts' => $posts]);
// }
