<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Video;

class VideoController extends Controller
{
    public function videos()
    {
      $videos = Video::orderBy('id', 'DESC')->paginate(6);
      return view('Videos', compact('videos'));
    }

}
