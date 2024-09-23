<?php
ob_start();
include 'include/header.php';

if($_GET['id']){
    $id=$_GET['id'];
    $sql="update booking set status='Cancelled' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('You Cancelled The Booking');
        window.location.href='booking-read.php';
        </script>";
    }
}
else{
    header('Location:booking-read.php');
}

?>