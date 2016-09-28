<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    session_start();
    define('APP_PATH', dirname(__FILE__));
    include_once(APP_PATH.'/controllers/IndexController.php');
    include_once(APP_PATH.'/controllers/UserController.php');
    include_once(APP_PATH.'/models/UsersModel.php');
    include_once(APP_PATH.'/models/CommentModel.php');
    include_once(APP_PATH.'/functions/functions.php');
    $route = (!empty($_GET['route'])) ? explode('/', $_GET['route']) : array('index', 'index');
    switch($route[0])
    {
        case 'index': $indexController = new IndexController();
                      $indexController->{$route[1]}();
                      break;
        case 'user':  $userController = new UserController();
                      $userController->{$route[1]}();
                      break;
    }
?>