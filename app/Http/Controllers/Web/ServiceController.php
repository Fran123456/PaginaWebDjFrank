<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Service;

class ServiceController extends Controller
{
    public function service()
    {
      $Services = Service::orderBy('id', 'DESC')->paginate(4);
      return view('Services', compact('Services'));
    }

}
