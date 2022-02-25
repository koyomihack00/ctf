<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login_admin_user";


        //Create Connection
        $conn = mysqli_connect($servername, $username, $password , $dbname);

        if (!$conn) {
            die("Connect Failed" . mysqli_connect_error());
        } else {
           // echo "Connected Successfully";
        }




?>