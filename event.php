<?php
include 'include/header.php';
?>
    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Event</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Event</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Event section start -->
    <section class="event-section">
        <div class="container">
            <div class="text-center">
                <small class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3">
                    Latest Events
                </small>
                <h2 class="text-dark display-5">Our Social & Professional Events Gallery</h2>
            </div>
            <div class="event-btns-content text-center my-5">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2 rounded-pill text-decoration-none active" id="pill-id-tab"
                            data-bs-toggle="pill" data-bs-target="#" href="#tab-1">
                            <span class="text-dark text-center" style="width: 150px;">All Events</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2 rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-dark text-center" style="width: 150px;">Wedding</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2 rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-3">
                            <span class="text-dark text-center" style="width: 150px;">Corporate</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2 rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-4">
                            <span class="text-dark text-center" style="width: 150px;">Cocktail</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2 rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-5">
                            <span class="text-dark text-center" style="width: 150px;">Buffet</span>
                        </a>
                    </li>
                </ul>
                <div class="content">
                    <div class="row">
                        <?php
                        $query = "Select * from gallery";
                        $gallerydata = mysqli_query($con,$query);
                        if(mysqli_num_rows($gallerydata) > 0){
                            $i = 1;
                            while($gallery = mysqli_fetch_assoc($gallerydata)){

                        ?>
                        <div class="col-lg-3 my-4 col-md-6" id="modal">
                            <a href="" style="color:#fff">close</a>
                                <div class="event-img-content" id="pill-id img1">
                                    <img src="admin/gallery/<?=$gallery['image'];?>" id="#im1" alt="" class="img-fluid rounded" onclick="modal(this)">
                                    <div class="event-content-icon d-flex flex-column">
                                        <h4 class="event-text"><?= ucfirst($gallery['type'])?>Wedding</h4>
                                        <a href="" class="event-iocn" data-bs-toggle="modal" data-bs-target="#imageModal<?=$gallery['id']?>">
                                            <i class="fa fa-search-plus " aria-hidden="true"></i>
                                        </a>
                                        <!-- Modal start -->
                                    </div>
                                </div>
                        </div>
                        <!-- <div class="modal">
                            <a href="" style="color:#fff">close</a>
                           <span onclick="modalClass()">&times;</span> -->
                            <!-- <div class="img1">
                                <img src="images/DSC_0221.JPG" id="#im1">
                            </div>
                        </div> -->
                        <script>
                            function modal(x) {
                                let image = document.querySelector(".modal");
                                image.style.display = "block"
                                document.querySelector('#im1').src = x.src;
                            }
                        </script>
                       <?php
                       $i++;
                            }
                        }
                       ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event section end -->
    <!-- book us section start-->
    <section class="book-section">
        <div class="container">
            <div class="row g-0">
                <div class="col-1">
                    <img src="images/background-site.jpg" alt=""
                        class="img-fluid w-100 h-100 object-fit-cover rounded-start">
                </div>
                <div class="col-10">
                    <div class="book-content border-bottom border-top py-5 px-4">
                        <div class="text-center">
                            <small
                                class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Book
                                Us
                            </small>
                            <h2 class="text-dark display-5 mb-5">Where you want Our Services</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Select Country</option>
                                    <option value="=1">USA</option>
                                    <option value="2">UK</option>
                                    <option value="3">India</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Select City</option>
                                    <option value="=1">Depend On Country</option>
                                    <option value="2">UK</option>
                                    <option value="3">India</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Select Palace</option>
                                    <option value="=1">Depend On Country</option>
                                    <option value="2">UK</option>
                                    <option value="3">India</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Small Event</option>
                                    <option value="=1">Event Type</option>
                                    <option value="2">Big Event</option>
                                    <option value="3">Small Event</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>No. Of Palace</option>
                                    <option value="=1">100-200</option>
                                    <option value="2">300-400</option>
                                    <option value="3">500-600</option>
                                    <option value="3">700-800</option>
                                    <option value="3">900-1000</option>
                                    <option value="3">1000+</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <select class="book-select form-select p-2 " id="">
                                    <option selected>Vegetarian</option>
                                    <option value="=1">Vegetarian</option>
                                    <option value="2">Non Vegetarian</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input class="book-input form-control p-2 bg-white" type="mobile"
                                    placeholder="Your Contact No.">
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input class="book-input form-control p-2 bg-white" type="date"
                                    placeholder="select date">
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input class="book-input form-control p-2 bg-white" type="email"
                                    placeholder="Enter Your Email">
                            </div>
                            <div class="col-lg-12 text-center my-4">
                                <button type="submit" class="btn book-btn px-5 py-3 rounded-pill">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <img src="images/background-site.jpg" alt=""
                        class="img-fluid w-100 h-100 object-fit-cover rounded-end">
                </div>
            </div>
        </div>
    </section>
    <!-- book us section end-->

 <?php
include 'include/footer.php';
?>