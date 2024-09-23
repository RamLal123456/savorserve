<?php
include 'layout/header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "Delete from contact where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data deleted successfully');
                window.location.href='pages-contact.php';
                </script>";
        }
    }else{
        header('Location:pages-contact.php');
    }
?>