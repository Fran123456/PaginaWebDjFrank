<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
  protected $fillable = [
       'name',  'body', 'precio'
 ];

}
