<?php
include('config/dbconnect.php');
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit'])){
        $uid = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $query = "Update user set name='$name', email='$email', phone='$phone', password='$password' where id=$uid";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data update successfully';
                window.location.href='read.php';
            </script>";
        }
    } 
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from user where id=$id";
    $data = mysqli_query($con,$query);
    if(mysqli_num_rows($data) > 0){
        $single = mysqli_fetch_assoc($data);
    }
?>
    <div class="login-container">
        <div class="login-form">
            <img src="images/blog-3.jpg" alt="Sign Up Image">
            <form action="<?= $_SERVER['PHP_SELF']?>" method='post'>
                <input type="hidden" value="<?=$_GET['id']?>" name="uid">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="<?= $single['name']?>" name="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="text" class="form-control" value="<?= $single['email']?>" name="email" placeholder="Enter Your email">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" value="<?= $single['phone']?>" name="phone"  placeholder="Enter Your Mobile number">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" value="<?= $single['password']?>" name="password" placeholder="Password">
                </div>
                <button id="btn" type="submit" name="submit" class="btn btn-block">Sign Up</button>
                <h6>If you have already an account. <a href="login.php">Login</a></h6>
            </form>
        </div>
    </div>

<?php
}else{
    header('Location:read.php');
}
?>