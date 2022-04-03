<?php

namespace coding\app\controllers;

use coding\app\models\City;

class CityController extends Controller{

    function listAll(){
        $citys=new City();
        $allcitys=$citys->getAll();
        //print_r($allCategories);

        $this->view('list_cities',$allcitys);

    }
    function create(){
        $this->view('add_city');

    }

    function store(){
        // print_r($_POST);
        // print_r($_FILES);
         $city=new City();
        
        $city->name=$_POST['name'];

        $city->created_by=1;
        $city->is_active=$_POST['is_active'];


        if($city->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }
    function edit($id = 0, $edit = null){
       echo "h"; 

    }
    function update(){

    }
    public function remove(){

    }


    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    




}

?>