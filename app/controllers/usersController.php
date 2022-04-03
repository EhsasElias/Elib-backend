<?php
namespace coding\app\controllers;

use coding\app\models\User;

class UsersController extends Controller{
  
    public  function show(){

        
    }
    public function home(){
        $this->view("home");

    }
    public function createUser(){
        $user = new User();
        $user->name = "Ehsas";
        $user->password=md5("123456");
        $user->is_active =1;
        $user->role_id=1;
        $user->save();
    }
    public function register(){
        $this->view("new_user");
    }
    public function cate(){
        $this->view("catogery");
    }
    public function delete(){

    }
}
?>