<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['user_name','email','phone'];

	public function products()
	{
		return $this->belongsToMany(Product::class,'order_product','order_id','product_id')->withPivot('amount');
	}
}
