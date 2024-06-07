<?php

namespace Hungt\PhpOop\Controllers\Admin;

use Hungt\PhpOop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}