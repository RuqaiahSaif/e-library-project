<?php
namespace coding\app\controllers;

use coding\app\models\User;
use coding\app\Models\Role;

class UsersController extends Controller{

   
      function newUser(){
        $roles=new role();
        $allroles=$roles->getAll();

        $this->view('new_user',$allroles);
    }

      function listAll(){
        $users=new User();
        $allusers=$users->getAll();
        //print_r($allCategories);

        $this->view('list_users',$allusers);

    }

        public function show(){

    }

    public function saveUser(){

        //print_r($_POST);
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=isset($_POST['is_active'])?1:0;
       $user->role_id=$_POST['roles'];
       
        if($user->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }

    public function register(){
        $this->view("new_user");
    }

    public function delete(){
        
    }




}
?>