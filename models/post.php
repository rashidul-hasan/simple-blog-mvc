<?php

    // create a post record on the database
    function create_post($params)
    {
      $connection = db_connect();
      $query = sprintf("insert into posts set  title = '%s', body = '%s', created_at = NOW(), user_id = '%s'",
                        mysqli_real_escape_string($connection, $params['title']),
                        mysqli_real_escape_string($connection, $params['body']),
                        mysqli_real_escape_string($connection, $params['user_id'])
                );

        $result = mysqli_query($connection, $query);
        if (!$result)
        {
            return false;
        }
        else
        {
            return true;
        }

    }


    /**
     * updates a post
     * @param array $params
     * @return bool
     */
    function update_post($params)
    {
      $connection = db_connect();

      $query = sprintf("update posts set title = '%s', body = '%s', user_id = '%s'
                        where id = %s",
                        mysqli_real_escape_string($connection, $params['title']),
                        mysqli_real_escape_string($connection, $params['body']),
                        mysqli_real_escape_string($connection, $params['user_id']),
                        mysqli_real_escape_string($connection, $params['id'])
                    );

        $result = mysqli_query($connection, $query);
        if (!$result)
        {
          return false;
        }
        else
        {
          return true;
        }

    }


            /**
     * deletes a post
     * @param int $id
     * @return bool
     */
    function delete_post($id)
    {
        $connection = db_connect();

        $query = sprintf("DELETE FROM posts WHERE id = %s", mysqli_real_escape_string($connection, $id));

        $result = mysqli_query($connection, $query);
        if (!$result)
        {
            return false;
        }
        else
        {
            return true;
        }

    }



     /**
     * returns array of posts from database
     * @return array
     */
    function show_posts()
    {
        $connection = db_connect();

        $query = 'SELECT posts.id AS id, posts.title, posts.body, posts.user_id, posts.created_at, users.username
                  FROM posts, users WHERE posts.user_id = users.id ORDER BY posts.created_at DESC';

            $result = mysqli_query($connection, $query);

            $number_of_posts = mysqli_num_rows($result);
            if ($number_of_posts == 0)
            {
              return false;
            }

            $result = result_to_array($result);

            return $result;

    }


    /**
     * find a post with particular id from database
     * @return array
     */
    function find_post($id)
    {
        $connection = db_connect();

        $query = sprintf("SELECT posts.id as id, posts.title, posts.body, posts.user_id, posts.created_at, users.username
                FROM posts, users
                WHERE posts.user_id = users.id AND posts.id = %s",

                                     mysqli_real_escape_string($connection, $id)

                                     );

            $result = mysqli_query($connection, $query);

            $number_of_posts = mysqli_num_rows($result);
            if ($number_of_posts == 0)
            {
                return false;
            }

            $row = mysqli_fetch_assoc($result);

            return $row;

    }


?>

