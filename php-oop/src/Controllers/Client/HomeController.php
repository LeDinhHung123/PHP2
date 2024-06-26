<?php 

namespace Hungt\PhpOop\Controllers\Client;

use Hungt\PhpOop\Commons\Controller;
use Hungt\PhpOop\Commons\Helper;
use Hungt\PhpOop\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        $name = 'HUNGLD';

        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
}