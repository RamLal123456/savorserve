<?php
include 'layout/header.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $uid=$_POST['uid'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $discription=$_POST['discription'];
    $type=$_POST['type'];
    if($_FILES['newimage']['name']){
        $temp_name = $_FILES['newimage']['tmp_name'];
        $orgname = $_FILES['newimage']['name'];
        move_uploaded_file($temp_name,'menu/'.$orgname);
    }
    else{
        $orgname=$_POST['oldimage'];
    }
    $query="Update menu set product='$name',price='$price',discription='$discription',product_image='$orgname',product_type='$type' where id=$uid";
    if(mysqli_query($con,$query)){
        echo "<script>
                alert('Menu Data updated successfully');
                window.location.href='menu.php';
                </script>";
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="Select * from menu where id=$id";
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
                <li class="breadcrumb-item"><a href="user.php">Menu</a></li>
                <li class="breadcrumb-item active">Menu Edit</li>
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
                                    <h5 class="card-title text-center pb-0 fs-4">Edit menu</h5>
                                    <p class="text-center small">Change menu data</p>
                                </div>
                                <form class="row g-3 needs-validation" action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="uid" value="<?=$_GET['id']?>">
                                    <div class="col-12">
                                        <label for="" class="form-label">Product</label>
                                        <input type="text" name="name" value="<?= $single['product']?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Price</label>
                                        <input type="text" name="price" value="<?= $single['price'];?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">Discription</label>
                                        <textarea name="discription" class="text-danger"><?= $single['discription'];?></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Product Image</label>
                                        <input type="file" name="newimage" class="form-control">
                                        <input type="hidden" name="oldimage" class="form-control" value="<?= $single['product_image'];?>">
                                        <img src="menu/<?= $single['product_image']?>" alt="" height="50px" width="50px">
                                    </div>
                                    <div class="col-12">
                                    <input type="hidden" value="<?= $singal['id']?>" name="id"/>
                                        <label for="yourName" class="form-label">Product Type</label>
                                        <select name="type" class="form-control">
                                            <option value="">--Select product type--</option>
                                            <option <?=$single['product_type']=='starter'?'selected':''?> value="starter">Starter</option>
                                            <option <?=$single['product_type']=='main-course'?'selected':''?> value="main-course">Main Course</option>
                                            <option <?=$single['product_type']=='drinks'?'selected':''?> value="drinks">Drinks</option>
                                            <option <?=$single['product_type']=='offers'?'selected':''?> value="offers">Offers</option>
                                            <option <?=$single['product_type']=='our-special'?'selected':''?> value="our-special">Our Special</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Add menu</button>
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