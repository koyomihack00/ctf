<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
<<<<<<< HEAD
        $dbname = "jackdeeper_db";
=======
        $dbname = "login_admin_user";
>>>>>>> 662ceaab1090ee4c47165f9baeb79c28a3ad1472


        //Create Connection
        $conn = mysqli_connect($servername, $username, $password , $dbname);

        if (!$conn) {
            die("Connect Failed" . mysqli_connect_error());
        } else {
           // echo "Connected Successfully";
        }




?>