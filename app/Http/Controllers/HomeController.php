<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
use App\Video;
use App\PostMejor;
use App\Oferta;
use App\Service;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $categories = Category::orderBy('id', 'DESC')->paginate();
    $usuarios =  User::orderBy('id', 'DESC')->paginate();
    $numeroCategorias =  Category::orderBy('id', 'DESC')->count();
    $numeroDiseños = Post::orderBy('id', 'DESC')->count();
    $numeroUsuarios = User::orderBy('id', 'DESC')->count();
    $numeroUsuarios = User::orderBy('id', 'DESC')->count();
    $numeroVideos = Video::orderBy('id', 'DESC')->count();
    $numeroMejoresDiseños = PostMejor::orderBy('id', 'DESC')->count();
    $numeroOferta = Oferta::orderBy('id', 'DESC')->count();
      $numeroServicios = Service::orderBy('id', 'DESC')->count();

      return view('home' , compact( 'numeroCategorias', 'numeroDiseños', 'numeroUsuarios'
     , 'usuarios', 'numeroVideos', 'numeroMejoresDiseños', 'numeroOferta', 'numeroServicios' ));
    }


}
