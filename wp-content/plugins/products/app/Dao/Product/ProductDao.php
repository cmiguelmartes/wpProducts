<?php
namespace App\Dao\Product;

use App\Models\Product\Product;
class ProductDao{

	public function saveListProduct($listProducts)
	{
		try{
			foreach ($listProducts as $key => $product) {
    			$newProduct = new Product();
    			$newProduct->product_id = $product->id;
    			$newProduct->code = $product->codigo;
    			$newProduct->name = $product->nombre;
    			$newProduct->description = $product->descripcion;
    			$newProduct->date_out = $product->fecha_salida;
    			$newProduct->price = $product->precio;
    			$newProduct->currency_id = $product->moneda_id;
    			$newProduct->name_currency = $product->moneda;
    			$newProduct->symbol_currency = $product->simbolo;
    			$newProduct->code_currency = $product->moneda_codigo;
    			$newProduct->save();
    		}

    		return array("error"=>true,"message"=>"success");
		}catch(\Exception $e)
		{
			return array("error"=>true,"message"=>$e->getMessage());
		}
	}
}