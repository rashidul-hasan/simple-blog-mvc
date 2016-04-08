 <?php
	// starts a session
	 session_start();

    // include config file
    include('config.php');


    //doing the routing
    function dispatcher($routes)
    {
        // Requested URL without the sitename. like, in case of myblog/posts/2
        // it'll return /posts/2
        $url = $_SERVER['REQUEST_URI'];

        // remove the first forward slash from the
        // requested url
        $url = substr($url, 1);

        // Remove query string from $url we don't need it anymore
        // so that it won't affect routes.
        $url = str_replace('?'.$_SERVER['QUERY_STRING'], '', $url);

        // this array will hold all the parameters that will
        // be passed through the url, all the POST & GET
        // variables
        $params = parse_params();

        // check if any of the routes has been matched with the
        // requested url, if not then show a msg and exit execution
        $route_match = false;

        //looping through the predefined routes to match with the url
        foreach($routes as $urls => $route)
        {
            if(preg_match($route['url'], $url, $matches))
            {
                $params = array_merge($params, $matches);
                $route_match = true;
                break; //exit the loop after matching first route
            }
        }

        if(!$route_match) { exit('no route found'); }

        // call the appropriate controller
        include(CONTROLLER_PATH.$route['controller'].'.php');

        // include the main view
        include(VIEW_PATH.'layouts'.DS.'main.php');

    }

    // reset our flashs back to empty.
    $_SESSION['flash']['notice'] = '';
    $_SESSION['flash']['warning'] = '';

    //calling the dispatcher function with $routes
    // that's been defined in config.php
    dispatcher($routes);


    // returns an array of POST & GET data
    function parse_params()
    {
        $params = array();

        if (!empty($_POST))
        {
            $params = array_merge($params, $_POST);
        }

        if (!empty($_GET))
        {
            $params = array_merge($params, $_GET);
        }
        return $params;
    }


?>

