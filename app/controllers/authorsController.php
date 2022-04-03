<?php
namespace coding\app\controllers;

use coding\app\models\Author;

class AuthorsController extends Controller{

    function listAll(){
        $authers=new Author();
        $allauthers=$authers->getAll();
        //print_r($allCategories);

        $this->view('list_authors',$allauthers);

    }
    function creates(){
        $this->view('add_auther');

    }

    function store(){
        // print_r($_POST);
        // print_r($_FILES);
        $author=new Author();
        
        $author->name=$_POST['name'];
        $author->phone=$_POST['phone'];
        $author->bio=$_POST['bio'];
        $author->email=$_POST['email'];
        $author->created_by=1;
        $author->is_active=$_POST['is_active'];
        
        if($author->save())
        
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