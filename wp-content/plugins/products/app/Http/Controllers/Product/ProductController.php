<?php

namespace App\Http\Controllers\Product;

use App\Helpers\LumenHelper;
use App\Traits\WpPageEnabled;
use App\Vehicle;
use App\Http\Controllers\Controller;
use App\Dao\Product\ProductDao;
use App\Dao\WebService\WebService;

class ProductController extends Controller
{
    public function getProducts(){
        $listProducts = (new WebService())->getProducts();
        $result = (new ProductDao())->saveListProduct($listProducts);
    	return $result;
    }
}



