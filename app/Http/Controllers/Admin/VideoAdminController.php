<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\VideoStoreRequest;
use App\Http\Requests\VideoUpdateRequest;

use App\Video;

class VideoAdminController extends Controller
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
      $categories = Video::orderBy('id', 'DESC')->paginate();
      return view('admin.videos.index', compact('categories'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.videos.create');
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(VideoStoreRequest $request)
  {
      $category = Video::create($request->all());
      return redirect()->route('videos.edit', $category->id)->with('info', 'video creado con éxito');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $category = Video::find($id);
      return view('admin.videos.show', compact('category'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $category = Video::find($id);
      return view('admin.videos.edit', compact('category'));
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(VideoUpdateRequest $request, $id)
  {
      $category = Video::find($id);
      $category->fill($request->all())->save();
      return redirect()->route('videos.edit', $category->id)->with('info', 'video actualizado con éxito');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $category = Video::find($id)->delete();
      return back()->with('info', 'Eliminado correctamente');
  }
}
