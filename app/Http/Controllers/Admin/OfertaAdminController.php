<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\OfertaStoreRequest;
use App\Http\Requests\OfertaUpdateRequest;

use App\Oferta;

class OfertaAdminController extends Controller
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
      $categories = Oferta::orderBy('id', 'DESC')->paginate();
      return view('admin.ofertas.index', compact('categories'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.ofertas.create');
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(OfertaStoreRequest $request)
  {
      $category = Oferta::create($request->all());
      return redirect()->route('ofertas.edit', $category->id)->with('info', 'Oferta creada con éxito');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $category = Oferta::find($id);
      return view('admin.ofertas.show', compact('category'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $category = Oferta::find($id);
      return view('admin.ofertas.edit', compact('category'));
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(OfertaUpdateRequest $request, $id)
  {
      $category = Oferta::find($id);
      $category->fill($request->all())->save();
      return redirect()->route('ofertas.edit', $category->id)->with('info', 'Oferta actualizada con éxito');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $category = Oferta::find($id)->delete();
      return back()->with('info', 'Eliminado correctamente');
  }
}
