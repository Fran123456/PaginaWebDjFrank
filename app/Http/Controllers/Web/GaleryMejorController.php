<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostMejor;
use App\Oferta;


class GaleryMejorController extends Controller
{
    public function galeryMejor()
    {
      $posts = PostMejor::orderBy('id', 'DESC')->paginate();
      $ofertas = Oferta::orderBy('id', 'DESC')->Paginate();
      return view('inicio', compact('posts', 'ofertas'));
    }

}
