<?php
    include 'layout/header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "delete from menu where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data deleted successfully');
                window.location.href='menu.php';
                </script>";
        }
    }else{
        header('Location:menu.php');
    }
?>