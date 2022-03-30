<?php

namespace coding\app\controllers;


use coding\app\controllers\Controller;

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
     public function dashboard()
    {
        $this->view('dashboard');
    }
}