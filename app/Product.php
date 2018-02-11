<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['title','slug','price','description'];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function orders()
	{
		return $this->belongsToMany(Order::class);
	}

	public function thumbnails()
	{
		return $this->belongsToMany(Thumbnail::class);
	}

	public static function lastProducts($amount)
	{
		return self::latest()->limit($amount)->get();
	}

}
