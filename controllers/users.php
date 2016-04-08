<?php


include(MODEL_PATH.'user.php');

switch ($route['view']) {

  case "new":

  break;

  case "add":
    print_r($params['user']);
    print_r($params['pass']);
  break;

  case "logout":

  break;


}




?>
