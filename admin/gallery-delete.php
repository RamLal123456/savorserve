<?php
    include('../config/dbconnect.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "delete from gallery where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data deleted successfully');
                window.location.href='gallery.php';
                </script>";
        }
    }else{
        header('Location:gallery.php');
    }
?>