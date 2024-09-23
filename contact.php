<?php
include 'include/header.php';
$nameerr = $emailerr = $messageerr = $responserr = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        $nameerr = "* Enter your name";
    }elseif(empty($_POST['email'])){
        $emailerr = "* Enter your email";
    }
    elseif(empty($_POST['message'])){
        $messageerr = "* Enter your message";
    }
    elseif(empty($_POST['respons'])){
        $responserr = "* Enter your response";
    }
    else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $respons = $_POST['respons'];
        $query = "Insert into contact(name,email,message,response) values('$name','$email','$message','$respons')";
        if(mysqli_query($con,$query)){
            echo "<script>
            alert('Your Data created successfully');
            window.location.href='contact.php';
            </script>";
            }
        }
    }
?>
    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Contact</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->

    <!-- contact us section start-->
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
                                class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">GET IN TOUCH
                            </small>
                            <h2 class="text-dark display-5 mb-5">Contact Us For Any Queries!</h2>
                        </div>

                        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 my-3">
                                <input name="name" class="book-input form-control p-2 bg-white" type="text"
                                    placeholder="Your Name">
                                    <small class="text-danger"><?=$nameerr?></small>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <input name="email" class="book-input form-control p-2 bg-white" type="text"
                                    placeholder="Enter Your Email">
                                    <small class="text-danger"><?=$emailerr?></small>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <textarea name="message" row="4" cols="10" class="book-input form-control p-2 bg-white" type="text"
                                    placeholder="Your Meassage"></textarea>
                                    <small class="text-danger"><?=$messageerr?></small>
                            </div>
                            <div class="col-lg-4 col-md-6 my-3">
                                <textarea name="respons" row="4" cols="20" class="book-input form-control p-2 bg-white" type="text"
                                    placeholder="Your Respons"></textarea>
                                    <small class="text-danger"><?=$responserr?></small>
                            </div>
                            <div class="col-lg-12 text-center my-4">
                                <button type="submit" class="btn book-btn px-5 py-3 rounded-pill">Submit Now</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-1">
                    <img src="images/background-site.jpg" alt=""
                        class="img-fluid w-100 h-100 object-fit-cover rounded-end">
                </div>
            </div>
        </div>
    </section>
    <!-- contact us section end-->

<?php
include 'include/footer.php';
?>