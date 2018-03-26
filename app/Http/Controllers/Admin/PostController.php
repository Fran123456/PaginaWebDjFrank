<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Post;
use App\Category;


class PostController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
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
      $posts = Post::orderBy('id', 'DESC')->paginate();
      return view('admin.posts.index', compact('posts'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
    return view('admin.posts.create', compact('categories'));

  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(PostStoreRequest $request)
  {


      $post = Post::create($request->all());
      return redirect()->route('posts.edit', $post->id)->with('info', 'Diseño creado con éxito');

  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $post = Post::find($id);
      return view('admin.posts.show', compact('post'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
      $post = Post::find($id);
      return view('admin.posts.edit', compact('post', 'categories'));
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(PostUpdateRequest $request, $id)
  {
      $post = Post::find($id);
      $post->fill($request->all())->save();
      return redirect()->route('posts.edit', $post->id)->with('info', 'Diseño actualizada con éxito');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $post = Post::find($id)->delete();
      return back()->with('info', 'Eliminado correctamente');
  }
}
