<?php
include 'include/header.php';
?>
    <!-- hero section start -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-7 py-5 ">
                    <small
                        class="d-inline-block small-btn fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-4  animated bounceInDown">welcome
                        to Savoor Serve</small>
                    <h1 class="animated bounceInDown">Book <span>Savoor</span> Serve For Your Dream Event</h1>
                    <a href="#" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 my-4 hero-btn">Book
                        Now</a>
                    <a href="#" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 my-4 hero-btn">Know
                        More</a>
                </div>
                <div class="col-lg-5 ">
                    <img src="images/hero.png" class="img-fluid py-5 animated zoomIn">
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    <!-- about section start -->
    <section class="about-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5  animated bounceInUp ">
                    <img src="images/about.jpg" class="img-fluid rounded ">
                </div>
                <div class="col-lg-7 my-3   animated bounceInUp">
                    <small
                        class="d-inline-block small-btn fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">about
                        us</small>
                    <h2 class="text-dark display-5">Trusted By 200 + satisfied clients</h2>
                    <p class="par-about">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit
                        esdioilore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaemco laboeeiris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor iesdein reprehendeerit in
                        voluptate velit esse cillum dolore.</p>
                    <div class="row mb-5 g-4">
                        <div class="col-sm-6 text-icon">
                            <i class="fa fa-share-alt me-2 shear-icon" aria-hidden="true"></i>
                            Fresh and Fast food Delivery
                        </div>
                        <div class="col-sm-6 text-icon">
                            <i class="fa fa-share-alt me-2 shear-icon" aria-hidden="true"></i>
                            24/7 Customer Support
                        </div>
                        <div class="col-sm-6 text-icon ">
                            <i class="fa fa-share-alt me-2 shear-icon" aria-hidden="true"></i>
                            Easy Customization Options
                        </div>
                        <div class="col-sm-6 text-icon">
                            <i class="fa fa-share-alt me-2 shear-icon" aria-hidden="true"></i>
                            Delicious Deals for Delicious Meals
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4  hero-btn">About us
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->
    <!-- customers count section start -->
    <section class="count-section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInUp;">
                            <div class="count-box rounded p-4 text-center">
                                <i class="fa fa-users  text-white mb-4 user-icon" aria-hidden="true"></i>
                                <h2 class="text-dark display-4 fw-bold" id="counter1" data-toggle="counter-up">689</h2>
                                <p class="text-dark text-uppercase fw-bold mb-0">Happy Customers</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">
                            <div class="count-box rounded p-4 text-center">
                                <i class="fa fa-cog  text-white mb-4 user-icon" aria-hidden="true"></i>
                                <h2 class="text-dark display-4 fw-bold" id="counter2" data-toggle="counter-up">107</h2>
                                <p class="text-dark text-uppercase fw-bold mb-0">Expert Chefs</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: bounceInUp;">
                            <div class="count-box rounded p-4 text-center">
                                <i class="fa fa-check  text-white mb-4 user-icon" aria-hidden="true"></i>
                                <h2 class="text-dark display-4 fw-bold" id="counter3" data-toggle="counter-up">253</h2>
                                <p class="text-dark text-uppercase fw-bold mb-0">Events Complete</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="video wow bounceInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: bounceInUp;">
                        <button type="button" class="btn  btn-play" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span></span>
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">YouTube Video</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body video-modal">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/qg0w6yDv6Eg?si=Vlxr3webLJ43HKEn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                </div>
            </div>
        </div>
    </section>
    <!-- customers count section end -->
    <!-- our services section start -->
    <section class="services-section">
        <div class="container">
            <div class="text-center">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Our
                    Services</small>
                <h2 class="text-dark display-5">What We Offer</h2>
            </div>
            <div class="row my-5">
                <div class="col-lg-3 my-4 col-md-6 col-sm-12">

                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-coffee service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Wedding Services</h4>
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="service-hover"></div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-glass service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Corporate Catering</h4>
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  my-4 col-md-6 col-sm-12">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-glass service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Bento Catering</h4>
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  my-4 col-md-6 col-sm-12">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-coffee service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Bento Catering</h4>
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-coffee service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Pub Party </h4>
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-ambulance service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Home Delivery</h4>
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-wheelchair-alt service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Sit-down Catering</h4>
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4 col-md-6 col-sm-12">
                    <div class="service-item rounded">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="fa fa-cutlery service-icon mb-4" aria-hidden="true"></i>
                                <h4 class="fs-4 mb-4 fw-bold">Buffet Catering</h4>
                                <p class=" mb-3 sevice-par">Contrary to popular belief, ipsum is not simply random.</p>
                                <a href="#" class="btn px-4 py-2 rounded-pill service-btn">Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our services section end -->
    <!-- Event section start -->
    <section class="event-section">
        <div class="container">
            <div class="text-center">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Latest
                    Events</small>
                <h2 class="text-dark display-5">Our Social & Professional Events Gallery</h2>
            </div>
            <div class="event-btns-content text-center my-5">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 ">
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" id="pill-id-tab"
                            data-bs-toggle="pill" data-bs-target="#" href="#tab-1">
                            <span class="text-dark text-center " style="width: 150px;">All Events</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-dark text-center " style="width: 150px;">Wedding</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-3">
                            <span class="text-dark text-center " style="width: 150px;">Corporate</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-4">
                            <span class="text-dark text-center " style="width: 150px;">Cocktail</span>
                        </a>
                    </li>
                    <li class="nav-items p-2">
                        <a class="d-flex mx-2 py-2  rounded-pill text-decoration-none active" data-bs-toggle="pill"
                            href="#tab-5">
                            <span class="text-dark text-center " style="width: 150px;">Buffet</span>
                        </a>
                    </li>
                </ul>
                <div class="content">
                    <div class="row">
                        <?php
                        $query = "Select * from gallery limit 8";
                        $gallerydata = mysqli_query($con,$query);
                        if(mysqli_num_rows($gallerydata) > 0){
                            $i = 1;
                            while($gallery = mysqli_fetch_assoc($gallerydata)){

                        ?>
                        <div class="col-lg-3 my-4 col-md-6">
                            <div class="event-img-content" id="pill-id">
                                <img src="admin/gallery/<?=$gallery['image'];?>" alt="" class="img-fluid rounded">
                                <div class="event-content-icon d-flex flex-column">
                                    <h4 class="event-text"><?= ucfirst($gallery['type'])?>Wedding</h4>
                                    <a href="" class="event-iocn" data-bs-toggle="modal" data-bs-target="#imageModal<?=$gallery['id']?>">
                                        <i class="fa fa-search-plus " aria-hidden="true"></i>
                                    </a>
                                    <!-- Modal start -->


                                </div>
                            </div>
                        </div>
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
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-01.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Paneer</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-02.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet Potato</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-03.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sabudana Tikki</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-04.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Pizza</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-05.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Bacon</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-06.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Chicken</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 py-3">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-07.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Blooming</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-item d-flex align-items-center">
                                <img src="images/menu-08.jpg" class="flex-shrink-0 img-fluid rounded-circle" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4>Sweet</h4>
                                        <h4 class="menu-reat">$90</h4>
                                    </div>
                                    <p class="mb-0 menu-par">Consectetur adipiscing elit sed dwso eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our menu section end-->
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
    <!-- Our team section start-->
    <section class="team-section">
        <div class="container">
            <div class="text-center">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Our
                    item</small>
                <h2 class="text-dark display-5">We have experienced chef Team</h2>
            </div>
            <div class="row g-4 my-5">
                <div class="col-lg-3 col-md-6">
                    <div class="team-iteam rounded">
                        <img src="images/team-1.jpg" alt="" class="img-fluid rounded-top ">
                        <div class="team-content text-center py-3 rounded-bottom">
                            <h4 class="iteam-text">Henry</h4>
                            <p class="text-white">Decoration Chef</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a href="#" class="share btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-iteam rounded">
                        <img src="images/team-2.jpg" alt="" class="img-fluid rounded-top ">
                        <div class="team-content text-center py-3 rounded-bottom">
                            <h4 class="iteam-text">Jemes Born</h4>
                            <p class="text-white">Executive Chef</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a href="#" class="share btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-iteam rounded">
                        <img src="images/team-3.jpg" alt="" class="img-fluid rounded-top ">
                        <div class="team-content text-center py-3 rounded-bottom">
                            <h4 class="iteam-text">Martin Hill</h4>
                            <p class="text-white">Kitchen Porter</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a href="#" class="share btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-iteam rounded">
                        <img src="images/team-4.jpg" alt="" class="img-fluid rounded-top ">
                        <div class="team-content text-center py-3 rounded-bottom">
                            <h4 class="iteam-text">Adam Smith</h4>
                            <p class="text-white">Head Chef</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a href="#" class="share btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-link btn btn-md-square rounded-circle mb-2">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our team section end-->
    <!-- testimonial section start-->
    <section class="testimonial-section">
        <div class="container">
            <div class="text-center">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase rounded-pill px-4 py-1 mb-3 ">Testimonial
                </small>
                <h2 class="text-dark display-5">What Our Customers says!</h2>
            </div>
            <div class="owl-carousel owl-theme first-carousel testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp"
                data-wow-delay="0.1s">
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme second-carousel testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp"
                data-wow-delay="0.1s">
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="item testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="images/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px;">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Person Name</h4>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                            <i class="fa fa-star text-star"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et
                            dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- testimonial section end-->
    <!-- Blog section start-->
    <section class="blog-section">
        <div class="container">
            <div class="text-center">
                <small
                    class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Our
                    Blog
                </small>
                <h2 class="text-dark display-5">Be First Who Read News</h2>
            </div>
            <div class="row gx-4 my-5 justify-content-center">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="blog-iteam">
                        <div class="overflow-hidden rounded blog-img">
                            <img src="images/blog-1.jpg" class="img-fluid">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light ">
                            <div class="blog-text  rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">sep</p>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="blog-iteam">
                        <div class="overflow-hidden rounded blog-img">
                            <img src="images/blog-2.jpg" class="img-fluid">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="blog-text  rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">sep</p>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="blog-iteam">
                        <div class="overflow-hidden rounded blog-img">
                            <img src="images/blog-3.jpg" class="img-fluid">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="blog-text  rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">sep</p>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end-->
   
<?php
include 'include/footer.php';
?>