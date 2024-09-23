<?php
include 'layout/header.php';
$typeerr = $imageerr = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['type'])){
        $typeerr = "Type feild is required";
    }elseif(empty($_FILES['image'])){
        $imageerr = "Image field is required";
    }else{
        $type = $_POST['type'];
        $imgname = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name,'gallery/'.$imgname);
        $query = "Insert into gallery(type,image) values('$type','$imgname')";
    }
    if(mysqli_query($con,$query)){
        echo "<script>
                alert('gallery data added successfully');
                window.location.href='gallery.php';
                </script>";
    }
}
?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add gallery data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="user.php">gallery</a></li>
                    <li class="breadcrumb-item active">Add gallery data</li>
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
                            <h5 class="card-title text-center pb-0 fs-4">Add gallery data</h5>
                        </div>
                        <form class="row g-3 needs-validation" method="post" action="" enctype="multipart/form-data">
                            <div class="col-12">
                            <label for="yourName" class="form-label">Type</label>
                            <select name="type" class="form-control">
                                <option value="">--Select Image type--</option>
                                <option value="Wedding">Wedding</option>
                                <option value="Corporate">Corporate</option>
                                <option value="Cocktail">Cocktail</option>
                                <option value="Buffet">Buffet</option>
                            </select>
                            <div class="invalid-feedback">Please, enter your type!</div>
                            </div>

                            <div class="col-12">
                            <label for="yourPassword" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="yourimage" >
                            <div class="invalid-feedback">Please image add!</div>
                            </div>
                            
                            </div>
                            <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Add gallery</button>
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