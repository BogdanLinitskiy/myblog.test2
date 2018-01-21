<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $table = 'my_posts';

	protected $fillable = ['title','slug','intro','body'];

	public function getRouteKeyName()
	{
		return 'slug';
	}

//	protected $guarded = ['id'];
}
