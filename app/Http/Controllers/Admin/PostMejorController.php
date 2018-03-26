<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostMejorStoreRequest;
use App\Http\Requests\PostMejorUpdateRequest;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\PostMejor;

class PostMejorController extends Controller
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
    $posts = PostMejor::orderBy('id', 'DESC')->paginate();
    return view('admin.PostMejor.index', compact('posts'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.PostMejor.create');
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(PostMejorStoreRequest $request)
  {
    $post = PostMejor::create($request->all());
    return redirect()->route('PostMejor.edit', $post->id)->with('info', 'Diseño creado con éxito');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $post = PostMejor::find($id);
    return view('admin.PostMejor.show', compact('post'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $post = PostMejor::find($id);
    return view('admin.PostMejor.edit', compact('post'));

  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(PostMejorUpdateRequest $request, $id)
  {
    $post = PostMejor::find($id);
    $post->fill($request->all())->save();
    return redirect()->route('PostMejor.edit', $post->id)->with('info', 'Diseño actualizado con éxito');

  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $post = PostMejor::find($id)->delete();
    return back()->with('info', 'Eliminado correctamente');
  }
}
