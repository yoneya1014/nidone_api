<?php
require 'vendor/autoload.php';

$dsn = 'mysql:host=nidone-db.cfg81woz8dyx.us-east-2.rds.amazonaws.com;dbname=nidone_db;charset=utf8';
$usr = 'yoneya1014';
$pwd = 'nidone_db_password';

$pdo = new \Slim\PDO\Database($dsn,$usr,$pwd);

$app = new \Slim\App;

session_start();
$container = $app->getContainer();

$container['view'] = function ($container) {
	return new \Slim\Views\PhpRenderer('./templates');
};

$app->get('/',function($request,$response,$args){
    $_get['userid'] = $_SESSION['userid'];
    return $this->view->render($response,'index.php');
});

$app->post('/post_time',function($request,$response,$args) use ($pdo){

});

$app->run();