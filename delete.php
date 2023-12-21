<?php
$conn = mysqli_connect("localhost","root","");
$database = mysqli_select_db($conn, 'users');

if(isset($_POST['delete'])){
    $ID = $_POST['ID'];

    $query = "DELETE FROM account WHERE ID = '$ID'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo ("<script>alert('Data Deleted.')</script>");
        echo("<script>window.location = 'admin.php';</script>");
    }
    else{
        echo '<script>alert("Data Not Deleted");</script>';
    }
}

?>