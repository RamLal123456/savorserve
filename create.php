<?php
include 'config/dbconnect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
       header("Location:signup.php?nameerr= Please enter your name");
    }else if(empty($_POST['email'])){
        header("Location:signup.php?emailerr= Please enter your email");
     }else if(empty($_POST['phone'])){
        header("Location:signup.php?phoneerr= Please enter your phone");
     }else if(empty($_POST['password'])){
        header("Location:signup.php?passworderr= Please enter your password");
     }
    else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $query = "Insert into user(name,email,phone,password) values('$name','$email','$phone','$password')";
        if(mysqli_query($con,$query)){
           echo "<script>
                alert('Your Data created successfully');
                window.location.href='signup.php';
                </script>";
            }
        }
    }
}
?>
