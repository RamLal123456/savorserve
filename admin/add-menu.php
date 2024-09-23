<?php
include 'layout/header.php';
$producterr =$priceerr =$discrptionerr =$pimageerr =$ptypeerr = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        $producterr = "Product feild is required";
    }elseif(empty($_POST['price'])){
        $priceerr = "Price feild is required";
    }elseif(empty($_POST['discription'])){
        $discrptionerr = "Discrption feild is required";
    }elseif(empty($_FILES['image']['name'])){
        $pimageerr = "Product Image field is required";
    }elseif(empty($_POST['type'])){
        $ptypeerr = "Product type field is required";
    }else{
        $product = $_POST['name'];
        $price = $_POST['price'];
        $discription = $_POST['discription'];
        $pimage = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $ptype = $_POST['type'];
        move_uploaded_file($temp_name,'menu/'.$pimage);
        $query = "Insert into menu(product,price,discription,product_image,product_type) values('$product','$price',' $discription','$pimage','$ptype')";
        if(mysqli_query($con,$query)){
            echo "<script>
                    alert('menu data added successfully');
                    window.location.href='menu.php';
                    </script>";
        }
    }
    
}
?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add menu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="menu.php">menu</a></li>
                    <li class="breadcrumb-item active">Add menu</li>
                </ol>
            </nav>
            <section class="section">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.php" class="logo d-flex align-items-center w-auto">
                        </a>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Add menu data</h5>
                        </div>
                        <form class="row g-3 needs-validation" method="post" action="<?= $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="" class="form-label">Product</label>
                                <input type="text" name="name">
                                <small class="text-danger"><?=$producterr?></small>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Price</label>
                                <input type="text" name="price">
                                <small class="text-danger"><?=$priceerr?></small>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Discription</label>
                                <textarea name="discription" id="" class="text-danger"></textarea>
                                <small class="text-danger"><?=$discrptionerr?></small>
                            </div>
                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Product Image</label>
                                <input type="file" name="image" class="form-control" id="yourimage" >
                                <small class="text-danger"><?= $pimageerr?></small>
                            </div>
                            <div class="col-12">
                                <label for="yourName" class="form-label">Product Type</label>
                                <select name="type" class="form-control">
                                    <option value="">--Select product type--</option>
                                    <option value="starter">Starter</option>
                                    <option value="main-course">Main Course</option>
                                    <option value="drinks">Drinks</option>
                                    <option value="offers">Offers</option>
                                    <option value="our-special">Our Special</option>
                                </select>
                                <small class="text-danger"><?=$ptypeerr?></small>
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
include 'layout/footer.php';
?>