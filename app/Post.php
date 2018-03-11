<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
     'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
 ];

 public function category()
     {
         return $this->belongsTo(Category::class);
     }


}
