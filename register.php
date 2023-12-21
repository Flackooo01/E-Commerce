<?php
include 'config.php';

error_reporting(0);
session_start();

if(isset($_SESSION['username'])){
    header("Location: index.php");
}

if(isset($_POST['submit'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$cpassword = md5($_POST['cpassword']);

if($password == $cpassword) {
    $sql = "SELECT * FROM account WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0){
        $sql = "INSERT INTO account (username, email, password)
                VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('User Registration Successfully,')</script>";
        $username ="";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
    }else{
        echo "<script>('Woops!!! Something went wrong.')</script>";
    }
}else{
        echo "<script>alert('Woops!!! Email Already Exist.')</script>";
    }
    }else{
        echo "<script>alert('Password Not Matched.')</script>";
}
}

?>




<!DOCTYPE html>

<html lang="en"> 

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gaming Accesssories </title>
    <link rel="stylesheet" href="css/register.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>


<body>
    <div class="popup" id="popup-1">
        <div class="container">
            <div class="close-btn"><a href="index.php">X</a></div>
            <form action="" method="POST" class="login-email">
                <p class="login-text">Register</p>
                
                <div class="input-group">
                    <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                </div>

                <div class="input-group">
                    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                </div>

                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>

                <div class="input-group">
                    <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                </div>

                <div class="input-group">
                    <button name="submit" class="btn">Register</button>
                </div>


                <p class="login-register-text">You Already have an account?<a href="index.php">Click Here</a>.</p>
            </form>
        </div>
    </div> 



</body>

</html>