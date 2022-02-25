<?php 
include('../server/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sql</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <center>
        <br>
        <br>
        <br>
        <h1 style="color:white;">SQL Injection Authentication Bypass</h1>
    </center>
        
<div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="user" placeholder="Username" required="required" />
        <input type="password" name="pass" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="sub">Login</button>
    </form>
    <?php
    
   
    if(isset($_POST['sub'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
        $query = mysqli_fetch_assoc($sql);

        
        if ($username = $query['username']){
            echo "<script> alert( 'Welcome admin' ); </script>";
            echo "<script> location.href='Flag_lab2.html' </script>";
        }else{
            echo "<script> alert( 'enter the wrong username' ); </script>";
            echo "<script> location.href='login.php' </script>";
        }
        
        
    }

?>
</div>
</body>
</html>