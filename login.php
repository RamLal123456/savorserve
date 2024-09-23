<?php
ob_start();
// session_start();
if(isset($_SESSION['id'])){
    if($_SESSION['role']==1){
        header('Location:admin/index.php');
       }else{
        header('Location:u1.php');
       }
}
include 'include/header.php';
$username= $passworderr =$final ='';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['username'])){
            $username="Please enter your username";
    }else if(!filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
        $username="Invalid username";
     }else if(empty($_POST['password'])){
        $password="Please enter your passeord";
     }
    else{
        $name = $_POST['username'];
        $password = $_POST['password'];
        $query = "select * from user where email='$name' && password='$password'";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result) > 0 ){
           $data=mysqli_fetch_assoc($result);
            $_SESSION['id']=$data['id'];
            $_SESSION['email']=$data['email'];
            $_SESSION['name']=$data['name'];
            $_SESSION['role']=$data['role'];
           if($data['role']==0){
            header('Location:u1.php');
           }else{
            header('Location:admin/index.php');
           }
        }else{
            $final="Username or password incorrect";
            }
        }
}  
?>

    <div class="login-container">
        <div class="login-form">
            <img src="images/about.jpg" alt="Sign Up Image">
            <span><?= $final?></span>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" class="form">
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Your email" name="username">
                    <small class="text-danger"><?= $username?></small>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <small class="text-danger"><?= $passworderr?></small>
                </div>
                <button id="btn" type="submit" class="btn btn-block">Login</button>
                <h6>If you have no account then click here.<a href="signup.php">sign up</a></h6>
            </form>
        </div>
    </div>

<?php
include 'include/footer.php';
?>