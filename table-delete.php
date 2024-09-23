<?php
    include 'include/header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "delete from address where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data deleted successfully');
                window.location.href='table-add-data.php';
                </script>";
        }
    }else{
        header('Location:table-add-data.php');
    }
?>