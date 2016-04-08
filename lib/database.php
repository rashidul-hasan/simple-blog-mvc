<?php

    // database connection
    function db_connect()
    {
        $connection = @mysqli_connect(HOST, USERNAME, PASSWORD, DB);
        if (!$connection)
        {
            return false;
        }

        return $connection;
    }

    //convert mysql result set into array
    function result_to_array($result)
    {
        $result_array = array();
        for ($i=0; $row = mysqli_fetch_assoc($result) ; $i++)
        {
            $result_array[$i] = $row;
        }

        return $result_array;
    }






?>
