<?php 

require_once("vendor/autoload.php");

//use \Slim\Slim;
use \mgeekoficial\Page;
$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();
	$page->setTpl("index");
    
	//$sql = new mgeekoficial\DB\Sql();
	//$results = $sql->select("SELECT * FROM tb_users");
	//echo json_encode($results);

});

$app->run();

 ?>