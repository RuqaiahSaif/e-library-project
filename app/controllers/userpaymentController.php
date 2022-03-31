<?php
namespace coding\app\controllers;

use coding\app\models\Userpayment;

class UserpaymentController extends Controller{

    function listAll(){
        $userpays=new Userpayment();
        $alluserpays=$userpays->getAll();
        //print_r($allCategories);

        $this->view('list_userpays',$alluserpays);

    }
    function create(){
        $this->view('add_userpay');

    }

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $book=new Book();
        
        $category->name=$_POST['category_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        if(isset($_POST['is_active'])&& $_POST['is_active'] == 1){
             $category->is_active=1;
        }
        else{
        $category->is_active= 0;
        }

        $category->save();

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