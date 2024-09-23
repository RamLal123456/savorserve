<?php
include 'layout/header.php';
$snameerr =$descrptionerr =$simageerr = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        $snameerr = "Services name feild is required";
    }elseif(empty($_POST['description'])){
        $descrptionerr = "Descrption feild is required";
    }elseif(empty($_FILES['image']['name'])){
        $simageerr = "Services Image field is required";
    }else{
        $sname = $_POST['name'];
        $description = $_POST['description'];
        $simage = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name,'service/'.$simage);
        $query = "Insert into services(services_name,description,services_image) values('$sname','$description','$simage')";
        if(mysqli_query($con,$query)){
            echo "<script>
                    alert('services data added successfully');
                    window.location.href='services.php';
                    </script>";
        }
    }   
}
?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add services</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="services.php">services</a></li>
                    <li class="breadcrumb-item active">Add services</li>
                </ol>
            </nav>
            <section class="section">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <a href="index.php" class="logo d-flex align-items-center w-auto"></a>
                    </div>
                    <!-- End Logo -->
                    <div class="card mb-3">
                        <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Add services data</h5>
                        </div>
                        <form class="row g-3 needs-validation" method="post" action="<?= $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="" class="form-label">Services Name</label>
                                <input type="text" name="name">
                                <small class="text-danger"><?=$snameerr?></small>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Description</label>
                                <textarea name="description" id="" class="text-danger"></textarea>
                                <small class="text-danger"><?=$descrptionerr?></small>
                            </div>
                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Services Image</label>
                                <input type="file" name="image" class="form-control" id="yourimage" >
                                <small class="text-danger"><?=$simageerr?></small>
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
    </main>
    <!-- End #main -->
<?php
include 'layout/footer.php';
?>