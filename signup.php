<?php
include 'include/header.php';
?>

<div class="login-container">
    <div class="login-form">
        <img src="images/blog-3.jpg" alt="Sign Up Image">
        <form method="post" action="create.php">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                <small style="color:red"><?= isset($_GET['nameerr'])?$_GET['nameerr']:''?></small>
            </div>
            <div class="form-group">
                <label for="">Email address</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Your email">
                <small   style="color:red"><?=isset($_GET['emailerr'])?$_GET['emailerr']:''?></small>
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control"  placeholder="Enter Your Mobile number">
                <small  style="color:red"><?=isset($_GET['phoneerr'])?$_GET['phoneerr']:''?></small>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control" placeholder="Password">
                <small style="color:red"><?=isset($_GET['passworderr'])?$_GET['passworderr']:''?></small>
            </div>
            <button id="btn" type="submit" name="submit" class="btn btn-block">Sign Up</button>
            <h6>If you have already an account. <a href="login.php">Login</a></h6>
        </form>
    </div>
</div>

<?php
include 'include/footer.php';
?>