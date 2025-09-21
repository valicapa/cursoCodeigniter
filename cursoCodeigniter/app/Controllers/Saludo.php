<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Saludo extends BaseController
{
    public function saludar()
    {
        return view('saludo');
    }

   
}
