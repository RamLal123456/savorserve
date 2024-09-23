<?php
    include 'layout/header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "delete from services where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data deleted successfully');
                window.location.href='services.php';
                </script>";
        }
    }else{
        header('Location:services.php');
    }
?>