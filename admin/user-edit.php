<?php
include 'layout/header.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $uid=$_POST['uid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $role=$_POST['role'];
    $query="Update user set name='$name',email='$email',phone='$phone',role=$role";
    if(mysqli_query($con,$query)){
        echo "<script>
                alert('User Data updated successfully');
                window.location.href='user.php';
                </script>";
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="Select * from user where id=$id";
    $data=mysqli_query($con,$sql);
    if(mysqli_num_rows($data) > 0){
        $single=mysqli_fetch_assoc($data);
    }
?>
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="user.php">Users</a></li>
                    <li class="breadcrumb-item active">Users Edit</li>
                </ol>
            </nav>
        <section class="section">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                    </a>
                </div><!-- End Logo -->
                <div class="card mb-3">
                    <div class="card-body">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Edit User</h5>
                        <p class="text-center small">Change users data</p>
                    </div>
                    <form class="row g-3 needs-validation" method="post" action="">
                        <div class="col-12">
                        <label for="yourName" class="form-label">Your Name</label>
                        <input type="text" name="name" value="<?=$single['name'];?>" class="form-control" id="yourName" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                        </div>
                        <div class="col-12">
                        <label for="yourUsername" class="form-label">Username/Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="email" value="<?=$single['email'];?>" class="form-control" id="yourUsername" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                        </div>
                        <div class="col-12">
                        <label for="yourPassword" class="form-label">Your Phone number</label>
                        <input type="text" name="phone" value="<?=$single['name'];?>" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                        <div class="col-12">
                        <label for="role" class="form-label">Role</label>
                        <input type="number" name="role" value="<?=$single['role'];?>" class="form-control" id="role" required>
                        <div class="invalid-feedback">Please enter your role!</div>
                        </div>
                        </div>
                        <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Edit User</button>
                        </div>
        
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        </div>
    </main><!-- End #main -->

<?php
}
?>

<?php
include 'layout/footer.php';
?>