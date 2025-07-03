<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;

class ProductsController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $products = Product::all();
        return view('products.product-list', ['productList' => $products]);
    }
}
