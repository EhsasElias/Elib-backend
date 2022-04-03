<?php

require_once __DIR__ .'\..\vendor\autoload.php';

use coding\app\controllers\UsersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
echo $_ENV['DB_SERVERNAME'];
$config=array('servername'=>$_ENV['DB_SERVERNAME'],'dbname'=>$_ENV['DB_NAME'],'dbpass'=>$_ENV['DB_PASSWORD'],'dbusername'=>$_ENV['DB_USERNAME']);
$system = new AppSystem($config);
Router::get('/users',[UsersController::class,'show']);
Router::get('/books',function(){
    echo "books route path";
});
Router::post('/users',[UsersController::class,'show']);
Router::get('/new_user',[UsersController::class,'register']);
Router::get('/remove_user',[UsersController::class,'delete']);
Router::get('/save_user' ,[UsersController::class,'createUser']);
Router::get('/cate' ,[UsersController::class,'cate']);
Router::get('/home' ,[UsersController::class,'home']);
$system->start();
?>