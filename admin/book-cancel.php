<?php
ob_start();
include 'layout/header.php';

if($_GET['statusid']){
    $id=$_GET['statusid'];
    $sql="update booking set status='Cancelled' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('You Cancelled The Booking');
        window.location.href='book-read.php';
        </script>";
    }
}
else{
    header('Location:book-read.php');
}
?>