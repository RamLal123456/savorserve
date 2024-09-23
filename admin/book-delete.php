<?php
    include 'layout/header.php';
    if($_GET['deleteid']){
        $id = $_GET['deleteid'];
        $query = "delete from booking where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data deleted successfully');
                window.location.href='book-read.php';
                </script>";
        }
    }else{
        header('Location:book-read.php');
    }
?>