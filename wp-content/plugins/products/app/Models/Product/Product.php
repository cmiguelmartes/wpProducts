<?php namespace App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	protected $table = 'product';
	protected $primaryKey = 'product_id';
	public $timestamps = false;
}