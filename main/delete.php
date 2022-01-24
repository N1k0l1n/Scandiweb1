<?php
    session_start();
    require_once "../Database/Database.php";
    if ($_SESSION['username'] == null){
        echo "<script>alert('Please login.')</script>";
        header("Refresh:0 , url = ../index.html");
        exit();

    }
    $delete_num = $_GET['id'];
    $sql_delete =  "DELETE FROM product WHERE id = '$delete_num'";
    $query_delete = mysqli_query($conn,$sql_delete);
    header("Refresh: 0 , url = ../list.php");
    echo "<script>alert('Success Deleted')</script>";

    exit();

    mysqli_close($conn);


?>
