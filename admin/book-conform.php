<?php
    include 'layout/header.php';
    if($_GET['deleteid']){
        $id = $_GET['deleteid'];
        $query = "update booking set status='confirmed' where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data conform successfully');
                window.location.href='book-read.php';
                </script>";
        }
    }else{
        header('Location:book-read.php');
    }
?>