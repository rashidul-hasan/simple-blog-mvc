<?php
    // Controller: posts

    include(MODEL_PATH.'post.php');
    //$post = find_post(36);
    //$posts = show_posts();


    switch ($route['view']) {

      case "show":
          $post = find_post($params['id']);

      break;

      case "delete":
          if(delete_post($params['id']))
          {
            flash_notice('Post deleted!');
            redirect_to('posts');
          }
      break;

      case "edit":
          $post = find_post($params['id']);
      break;

      case "index";
        $posts = show_posts();
      break;

      case "create":
        if(create_post($params['post']))
        {
           flash_notice('Successfully created post!');
           redirect_to('posts');
        }
      break;

      case "update":
        $params['post']['id'] = $params['id'];
        if(update_post($params['post']))
        {
          flash_notice('Successfully updated post!');
          redirect_to('posts');
        }
      break;


    }

?>

<!-- end controller -->
