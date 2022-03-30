<?php
require_once __DIR__ . '/../vendor/autoload.php';
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\HomeController;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\bookController;
use coding\app\controllers\PublishersController;
use coding\app\controllers\UsersController;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

// library routers
Router::get('/', [HomeController::class, 'index']);
Router::get('/cart', [HomeController::class, 'cart']);
Router::get('/category', [HomeController::class, 'category']);
Router::get('/details', [HomeController::class, 'details']);
Router::get('/steper', [HomeController::class, 'steper']);
Router::get('/dashboard', [HomeController::class, 'dashboard']);

//users routers
Router::get('/users',[UsersController::class,'show']);
Router::get('/books',function(){
  echo "books route path";
});
Router::get('/new_user',[UsersController::class,'register']);
Router::get('/remove_user',[UsersController::class,'delete']);
Router::post('/users',[UsersController::class,'show']);
Router::get('/new_user',[UsersController::class,'newUser']);
Router::post('/save_user',[UsersController::class,'saveUser']);


/** category routes  */


Router::get('/categories',[CategoriesController::class,'listAll']);
Router::get('/add_category',[CategoriesController::class,'create']);
Router::get('/edit_category/id',[CategoriesController::class,'edit']);
Router::get('/remove_category',[CategoriesController::class,'remove']);
Router::post('/save_category',[CategoriesController::class,'store']);
Router::post('/update_category',[CategoriesController::class,'update']);

/** end of category routes */

/** book routes  */


Router::get('/books',[bookController::class,'listAll']);
Router::get('/add_book',[bookController::class,'create']);
Router::get('/edit_book/id',[bookController::class,'edit']);
Router::get('/remove_book',[bookController::class,'remove']);
Router::post('/save_book',[bookController::class,'store']);
Router::post('/update_book',[bookController::class,'update']);

/** end of book routes */
// auther routers
Router::get('/save_author',[AuthorsController::class,'createAuthor']);


$system->start();
