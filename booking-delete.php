<?php
    include 'include/header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "delete from booking where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data deleted successfully');
                window.location.href='booking-read.php';
                </script>";
        }
    }else{
        header('Location:booking-read.php');
    }
?>