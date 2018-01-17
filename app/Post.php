<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $table = 'my_posts';

	protected $fillable = ['title','intro','body'];

//	protected $guarded = ['id'];
}
