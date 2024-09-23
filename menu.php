<?php
include 'include/header.php';
?>
    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Menu</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Menu</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->

    <!-- our menu section start-->
    <section class="menu-section">
        <div class="container menu-btn">
            <div class="text-center">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Our
                    Menu</small>
                <h2 class="text-dark display-5">Most Popular Food in the World</h2>
            </div>
            <div class="menu-btns-content text-center my-5">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 ">
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-1">
                            <span class="text-dark text-center " style="width: 150px;">Starter</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-1">
                            <span class="text-dark text-center " style="width: 150px;">Main Course</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-1">
                            <span class="text-dark text-center " style="width: 150px;">Drinks</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-1">
                            <span class="text-dark text-center " style="width: 150px;">Offers</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-1">
                            <span class="text-dark text-center " style="width: 150px;">Our Spesial</span>
                        </a>
                    </li>
                </ul>
                <div class="menu-content">
                    <div class="row d-flex align-items-center">
                        <?php
                        $sql="Select * from menu";
                        $result=mysqli_query($con,$sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){

                        ?>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="admin/menu/<?= $row['product_image']?>"  height="100px" width="100px" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4><?= $row['product']?></h4>
                                        <h4 class="menu-reat">INR<?= $row['price']?></h4>
                                    </div>
                                    <p class="mb-0 menu-par"><?= $row['discription']?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                         }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our menu section end-->

<?php
include 'include/footer.php';
?>