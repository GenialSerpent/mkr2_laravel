<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductsController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index() {

    }
    public function create() {
        $productsArr = [
            [
                'name' => 'product 1',
                'manufacturer' => 'manufacturer 1',
                'price' => 1000,
                'production_date' => '2017-11-03'
            ],
            [
                'name' => 'product 2',
                'manufacturer' => 'manufacturer 2',
                'price' => 2000,
                'production_date' => '2017-12-03'
            ],
            [
                'name' => 'product 3',
                'manufacturer' => 'manufacturer 3',
                'price' => 3000,
                'production_date' => '2017-13-03'
            ],
        ];
        foreach ($productsArr as $item) {
            Product::create($item);
        }
    }
}
