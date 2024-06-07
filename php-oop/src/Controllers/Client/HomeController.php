<?php

namespace Hungt\PhpOop\Controllers\Client;

use Hungt\PhpOop\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}