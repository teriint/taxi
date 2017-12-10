<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Http\Requests\StorePost as StorePostRequest;

use Auth;

use Gate;

use App\Http\Requests\UpdatePost as UpdatePostRequest;

class PostController extends Controller
{
	
public function index()
{
    $posts = Post::published()->paginate();

    return view('posts.index', compact('posts'));
}


public function create()
{
    return view('posts.create');
}

public function store(StorePostRequest $request)
{
    $data = $request->only('p_o', 'p_p', 'val', 'phone', 'body', 'stat');
    
    $data['user_id'] = Auth::user()->id;
    $post = Post::create($data);
    return redirect()->route('edit_post', ['id' => $post->id]);
}

public function drafts()
{
    $postsQuery = Post::unpublished();
    if(Gate::denies('see-all-drafts')) {
        $postsQuery = $postsQuery->where('user_id', Auth::user()->id);
    }
    $posts = $postsQuery->paginate();
    return view('posts.drafts', compact('posts'));
}

public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}

public function edit_status(Post $post)
{
	$post->stat = "Выполняется";
    return view('posts.edit_status', compact('post'));
}
	
public function update_status(Post $post, UpdatePostRequest $request)
{
    $data = $request->only('p_o', 'p_p', 'val', 'phone', 'body', 'stat');

    $post->fill($data)->save();
    return view('posts.show', compact('post'));
}

public function edit_ok(Post $post)
{
	$post->stat = "Выполнен";
    return view('posts.edit_ok', compact('post'));
}
	
public function update_ok(Post $post, UpdatePostRequest $request)
{
    $data = $request->only('p_o', 'p_p', 'val', 'phone', 'body', 'stat');

    $post->fill($data)->save();
    return view('posts.show', compact('post'));
}
public function update(Post $post, UpdatePostRequest $request)
{
    $data = $request->only('p_o', 'p_p', 'val', 'phone', 'body', 'stat');

    $post->fill($data)->save();
    return back();
}

public function publish(Post $post)
{
    $post->published = true;
    $post->save();
    return back();
}

public function show($id)
{	
	
    $post = Post::published()->findOrFail($id);
    return view('posts.show', compact('post'));
}
	
}
