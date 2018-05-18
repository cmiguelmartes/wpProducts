<?php
namespace App\Dao\WebService;
class WebService{

	public function getProducts()
	{
		try{
			$listProducts = file_get_contents("http://localhost/products/json/list");
			return json_decode($listProducts);
		}catch(\Exception $e)
		{
			return array("error"=>true,"message"=>$e->getMessage());
		}

	}

}