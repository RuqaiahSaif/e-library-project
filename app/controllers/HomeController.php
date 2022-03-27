<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller
{

   
    public function index()
    {
   
        $this->view('index');
    }

    public function cart()
    {
        $this->view('cart');
    }

    public function category()
    {
        $this->view('category');
    }
    public function details()
    {
        $this->view('details');
    }

    public function steper()
    {
        $this->view('steper');
    }
}