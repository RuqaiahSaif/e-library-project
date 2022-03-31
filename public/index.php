<?php
require_once __DIR__ . '/../vendor/autoload.php';
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\HomeController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\bookController;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublisherController;
use coding\app\controllers\UsersController;
use coding\app\controllers\CityController;
use coding\app\controllers\OfferController;
use coding\app\controllers\OrderController;
use coding\app\controllers\UserpaymentController;
use coding\app\controllers\UseraddressController;


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
Router::get('/users',[UsersController::class,'listAll']);
Router::get('/books',function(){
  echo "books route path";
});
Router::get('/new_user',[UsersController::class,'register']);
Router::get('/remove_user',[UsersController::class,'delete']);
Router::get('/new_user',[UsersController::class,'newUser']);
Router::post('/save_user',[UsersController::class,'saveUser']);


/** category routes  */


Router::get('/categories',[CategoriesController::class,'listAll']);
Router::get('/add_category',[CategoriesController::class,'create']);
Router::get('/edit_category/id',[CategoriesController::class,'edit']);
Router::get('/remove_category',[CategoriesController::class,'remove']);
Router::post('/save_category',[CategoriesController::class,'store']);
Router::post('/update_category',[CategoriesController::class,'update']);
Router::get('/',[CategoriesController::class,'show']);

/** end of category routes */

/** book routes  */


Router::get('/books',[bookController::class,'listAll']);
Router::get('/add_book',[bookController::class,'create']);
Router::get('/edit_book/id',[bookController::class,'edit']);
Router::get('/remove_book',[bookController::class,'remove']);
Router::post('/save_book',[bookController::class,'store']);
Router::post('/update_book',[bookController::class,'update']);

/** end of books routes */



Router::get('/authors',[AuthorsController::class,'listAll']);
Router::get('/add_auther',[AuthorsController::class,'creates']);
Router::get('/edit_author/id',[AuthorsController::class,'edit']);
Router::get('/remove_author',[AuthorsController::class,'remove']);
Router::post('/save_author',[AuthorsController::class,'store']);
Router::post('/update_author',[AuthorsController::class,'update']);

/** end of author routes */


/** end of publisher routes */



Router::get('/publishers',[PublisherController::class,'listAll']);
Router::get('/add_publisher',[PublisherController::class,'create']);
Router::get('/edit_publisher/id',[PublisherController::class,'edit']);
Router::get('/remove_publisher',[PublisherController::class,'remove']);
Router::post('/save_publisher',[PublisherController::class,'store']);
Router::post('/update_publisher',[PublisherController::class,'update']);

/** end of publisher routes */


/** city routes  */


Router::get('/cities',[CityController::class,'listAll']);
Router::get('/add_city',[CityController::class,'create']);
Router::get('/edit_city/id',[CityController::class,'edit']);
Router::get('/remove_city',[CityController::class,'remove']);
Router::post('/save_city',[CityController::class,'store']);
Router::post('/update_city',[CityController::class,'update']);

/** end of city routes */

/** offer routes  */


Router::get('/offers',[OfferController::class,'listAll']);
Router::get('/add_offer',[OfferController::class,'create']);
Router::get('/edit_offer/id',[OfferController::class,'edit']);
Router::get('/remove_offer',[OfferController::class,'remove']);
Router::post('/save_offer',[OfferController::class,'store']);
Router::post('/update_offer',[OfferController::class,'update']);

/** end of offer routes */


/** order routes  */


Router::get('/orders',[OrderController::class,'listAll']);
Router::get('/add_order',[OrderController::class,'create']);
Router::get('/edit_order/id',[OrderController::class,'edit']);
Router::get('/remove_order',[OrderController::class,'remove']);
Router::post('/save_order',[OrderController::class,'store']);
Router::post('/update_order',[OrderController::class,'update']);

/** end of order routes */

/** Userpayment routes  */


Router::get('/userpays',[UserpaymentController::class,'listAll']);
Router::get('/add_userpay',[UserpaymentController::class,'create']);
Router::get('/edit_userpay/id',[UserpaymentController::class,'edit']);
Router::get('/remove_userpay',[UserpaymentController::class,'remove']);
Router::post('/save_userpay',[UserpaymentController::class,'store']);
Router::post('/update_userpay',[UserpaymentController::class,'update']);

/** end of Userpayment routes */


/** Useraddress routes  */


Router::get('/usersddress',[UseraddressController::class,'listAll']);
Router::get('/add_useraddress',[UseraddressController::class,'create']);
Router::get('/edit_userpay/id',[UseraddressController::class,'edit']);
Router::get('/remove_userpay',[UseraddressController::class,'remove']);
Router::post('/save_userpay',[UseraddressController::class,'store']);
Router::post('/update_userpay',[UseraddressController::class,'update']);

/** end of Useraddress routes */

// auther routers
Router::get('/save_author',[AuthorsController::class,'createAuthor']);
$system->start();

