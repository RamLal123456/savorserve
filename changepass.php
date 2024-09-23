<?php
include 'include/header.php';
// include 'include/sidebar.php';
if(!isset($_SESSION['role']) || ($_SESSION['role']!=0)){
    header('Location:login.php');
}
// $id=$result['id'];
$id=$_SESSION['id'];
$olderr= $newerr= $conerr='';
?>
    <div class="d-flex">
        <?php include "include/sidebar.php"?>
        <div class="login-form">
            <h3>Change Password</h3>
            <img src="images/blog-3.jpg" alt="Sign Up Image">
            <form class="update-form" method="post" action="<?= $_SERVER['PHP_SELF']?>">
                <div class="form-group">
                    <label for="">Old Password</label>
                    <input type="password" name="old" class="form-control" placeholder="Password">
                    <small style="color:red"><?= $olderr?></small>
                </div>
                <div class="form-group">
                    <label for="">New Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                    <small style="color:red"><?= $newerr?></small>
                </div>
                <div class="form-group">
                    <label for="">Change Password</label>
                    <input type="password" name="confirmpass" class="form-control" placeholder="Password">
                    <small style="color:red"><?= $conerr?></small>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['old'])){
        $olderr="Please Enter your old Password";
    }elseif(empty($_POST['pass'])){
        $newerr="Please Enter your new Password";
    }elseif(empty($_POST['confirmpass'])){
        $conerr="Please Enter your confirm Password";
    }elseif($_POST['confirmpass']!=$_POST['pass']){
        $conerr="Please Enter your confirm Password same as new password";
    }elseif($_POST['old']!=$result['pass']){
        $olderr="Please Enter your correct new password";
    }elseif($_POST['old']!=$_POST['pass']){
        $olderr="Your new password matching old password use diffirent passsword";
    }else{
        $new=$_POST['pass'];
        $sql="Update user set password='$new' where id=$id";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('Password change successfully');
            window.location.href='u1.php';
            </script>";
        }
    }
}
include 'include/footer.php';
?>