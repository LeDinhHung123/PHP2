<?php

namespace Hungt\PhpOop\Controllers\Admin;

use Hungt\PhpOop\Commons\Controller;
use Hungt\PhpOop\Commons\Helper;
use Hungt\PhpOop\Models\Product;

class DashboardController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function dashboard() {    
        $products = $this->product->all();

        $analysisProduct = array_map(function ($item) {
            return [
                $item['name'],
                $item['views']
            ];
        }, $products);

        array_unshift($analysisProduct, ['Tên sản phẩm', 'Lượt views']);

        $this->renderViewAdmin(__FUNCTION__, [
            'analysisProduct' => $analysisProduct
        ]);
    }
}