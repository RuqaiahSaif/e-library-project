<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
        
    }

    function index(){
$this->view("index");
        // echo "<h1>index of home</h1>";

    }
    function library(){
$this->view("library");
    }
   

}
?>