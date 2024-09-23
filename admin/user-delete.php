<?php
include 'layout/header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // $con = mysqli_connect('localhost','root','','caterserv');
        $query = "Delete from user where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data deleted successfully');
                window.location.href='user.php';
                </script>";
        }
    }else{
        header('Location:user.php');
    }
?>