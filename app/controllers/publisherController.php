<?php
namespace coding\app\controllers;

use coding\app\models\Publisher;

class PublisherController extends Controller{

    function listAll(){
        $publishers=new Publisher();
        $allpublishers=$publishers->getAll();
        //print_r($allCategories);

        $this->view('list_publishers',$allpublishers);

    }
    function create(){
        $this->view('add_publisher');

    }

    function store(){
        // print_r($_POST);
        // print_r($_FILES);
      $publisher=new Publisher();
        
        $publisher->name=$_POST['name'];
        $publisher->phone=$_POST['phone'];
        $publisher->alt_phone=$_POST['alt_phone'];
        $publisher->fax=$_POST['fax'];
        $publisher->email=$_POST['email'];
        $publisher->address=$_POST['address'];
        $publisher->country=$_POST['country'];
        $imageName=$this->uploadFile($_FILES['image']);

        $publisher->image=$imageName!=null?$imageName:"default.png";
        $publisher->created_by=1;
        $publisher->is_active=$_POST['is_active'];
        
        if($publisher->save())
        
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