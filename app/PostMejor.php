<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostMejor extends Model
{
    //
    protected $fillable = [
         'name',  'body',  'file'
   ];
}
