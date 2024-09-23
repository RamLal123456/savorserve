<?php
include 'layout/header.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $uid=$_POST['uid'];
    $name=$_POST['services_name'];
    $discription=$_POST['discription'];
    if($_FILES['newimage']['name']){
        $temp_name = $_FILES['newimage']['tmp_name'];
        $orgname = $_FILES['newimage']['name'];
        move_uploaded_file($temp_name,'services/'.$orgname);
    }
    else{
        $orgname=$_POST['oldimage'];
    }
    $query="Update menu set services_name='$name',discription='$discription',services_image='$orgname' where id=$uid";
    if(mysqli_query($con,$query)){
        echo "<script>
                alert('Menu Data updated successfully');
                window.location.href='services.php';
                </script>";
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="Select * from services where id=$id";
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
                    <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                    <li class="breadcrumb-item active">Services Edit</li>
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
                            <h5 class="card-title text-center pb-0 fs-4">Edit services</h5>
                            <p class="text-center small">Change services data</p>
                        </div>
                        <form class="row g-3 needs-validation" action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="uid" value="<?=$_GET['id']?>">
                            <div class="col-12">
                                <label for="" class="form-label">Services Name</label>
                                <input type="text" name="name" value="<?= $single['services_name']?>">
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Discription</label>
                                <textarea name="discription" class="text-danger"><?= $single['discription'];?></textarea>
                            </div>
                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Services Image</label>
                                <input type="file" name="newimage" class="form-control">
                                <input type="hidden" name="oldimage" class="form-control" value="<?= $single['services_image'];?>">
                                <img src="menu/<?= $single['services_image']?>" alt="" height="50px" width="50px">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Add services</button>
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