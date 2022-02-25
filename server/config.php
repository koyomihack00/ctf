<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project_register_db";


        //Create Connection
        $conn = mysqli_connect($servername, $username, $password , $dbname);

        if (!$conn) {
            die("Connect Failed" . mysqli_connect_error());
        } else {
           // echo "Connected Successfully";
        }




?>