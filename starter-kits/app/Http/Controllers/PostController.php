<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Auth::user());
            $data = [
                'tittle' => 'List Blog',
                'posts' => Post::get(),
                'route' => route('posts.create'),
            ];
            // dd($data);
            return view('admin.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'tittle' => 'New Post',
            'method' => 'POST',
            'route' => route('posts.store'),
        ];
        return view('admin.post.editor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $user_id = Auth::user()->id;
        $post->user_id = $user_id;
        $post->tittle = $request->tittle;
        $post->slug = $request->tittle;
        $post->excerpt = $request->tittle;
        $post->body = $request->tittle;
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // dd($slug);
            $data = [
                'tittle' => 'List Blog',
                'post' => Post::where('slug', $slug)->first(),
            ];
            return view('post', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'tittle' => 'List Blog',
            'posts' => Post::where('id', $id)->first(),
            'route' => route('posts.update',$id),
            'method' => 'PUT',
        ];
        return view('admin.post.editor', $data);
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
        $post = Post::find($id);
        $post->tittle = $request->tittle;
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Post::where('id',$id);
        // dd($data);
        $data->delete();
        // dd('ok');
        // if ($data->save()) {
            return redirect(route('posts.index'))->with('success', 'Data deleted successfully');
        // } else {
            return redirect(route('posts.index'))->with('error', 'Failed deleting data');
        // }
    }
}
