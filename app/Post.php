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

	public function comments(){
		return $this->hasMany(Comment::class);
//		return $this->hasMany(Comment::class,'post_id','id');
	}
	public function thumbnails()
	{
		return $this->belongsToMany(Thumbnail::class);
	}


//	protected $guarded = ['id'];
}
