<?php
/*
|--------------------------------------------------------------------------
| Config file
|--------------------------------------------------------------------------
| all the app specific config parameters are defined here
| you must customize it for your own info
|
|
|
*/

    // all the routes are defined here with the
    // help of regex
    $routes = array(

                // posts
                array('url' => '/^posts\/(?P<id>\d+)$/', 'controller' => 'posts', 'view' => 'show'),
                array('url' => '/^posts\/(?P<id>\d+)\/edit$/', 'controller' => 'posts', 'view' => 'edit'),
                array('url' => '/^posts\/new$/', 'controller' => 'posts', 'view' => 'new'),
                array('url' => '/^posts\/create$/', 'controller' => 'posts', 'view' => 'create'),
				array('url' => '/^posts\/?$/', 'controller' => 'posts', 'view' => 'index'),
				array('url' => '/^posts\/(?P<id>\d+)\/edit$/', 'controller' => 'posts', 'view' => 'edit'),
				array('url' => '/^posts\/(?P<id>\d+)\/update$/', 'controller' => 'posts', 'view' => 'update'),
				array('url' => '/^posts\/(?P<id>\d+)\/delete$/', 'controller' => 'posts', 'view' => 'delete'),
                array('url' => '/^\s*$/', 'controller' => 'posts', 'view' => 'index'),

                // users
                array('url' => '/^users\/login$/', 'controller' => 'users', 'view' => 'login'),
                array('url' => '/^users\/add$/', 'controller' => 'users', 'view' => 'add'),
                array('url' => '/^users\/logout$/', 'controller' => 'users', 'view' => 'logout')
            );

    // Database connection params
    define('HOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DB', 'myblog');


    // The server root
    define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT']);

    // Directory separator
    define('DS', '/');

    // application name
    define('APP_NAME', 'myblog');

    // MVC directories
    define('MODEL_PATH', SERVER_ROOT.DS.'models'.DS);
    define('VIEW_PATH', SERVER_ROOT.DS.'views'.DS);
    define('CONTROLLER_PATH', SERVER_ROOT.DS.'controllers'.DS);


    // library includes
    include('lib/database.php');
	include('lib/controller.php');
    include('lib/model.php');


 ?>
