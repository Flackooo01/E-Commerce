<?php

session_start();
error_reporting(0);

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "users";

    $data = mysqli_connect($server, $user, $pass, $database);

    if($data === false)
    {
        die("<script>alert('Connection Failed')</script>");
    }

    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM account WHERE username = '".$username."' AND password='".$password."' ";

        $result = mysqli_query($data,$sql);

        $row = mysqli_fetch_array($result);

        if($row["usertype"]=="User"){
            $_SESSION['username'] = $row['username'];
            header("Location: afterlogin.php");
        }
        elseif($row["usertype"]=="Admin"){
            header("Location: admin.php");
        }else{
            echo ("<script>alert('username or password incorrect.')</script>");
            echo("<script>window.location = 'index.php';</script>");
        }  
    }
    
    


?>