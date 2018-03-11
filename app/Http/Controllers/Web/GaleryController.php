<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class GaleryController extends Controller
{
    public function galery()
    {
      $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);
      return view('Galery', compact('posts'));
    }
    public function post($slug)
    {
      $post = Post::where('slug', $slug)->first();
      return view('Design' , compact('post'));
    }

    public function category($slug)
    {
      $category = Category::where('slug', $slug)->pluck('id')->first();
      $posts = Post::where('category_id', $category)
      ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);
      return view('Galery', compact('posts'));
    }
}
