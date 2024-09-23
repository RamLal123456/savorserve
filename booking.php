<?php
include 'include/header.php';
$uid=$_SESSION['id'];
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
    header('Location:login.php');
}
$countryerr =$cityerr =$palaceerr =$eventerr =$noerr =$type_fooderr =$mobileerr =$dateerr =$emailerr ='';
if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['country'])){
            $countryerr="* Enter your country";
        }elseif(empty($_POST['city'])){
            $cityerr="* Enter your city";
        }elseif(empty($_POST['palace'])){
            $palaceerr="* Enter your palace";
        }elseif(empty($_POST['event'])){
            $eventerr="* Enter your event";
        }elseif(empty($_POST['no_palace'])){
            $noerr="* Enter your no_of_palace";
        }elseif(empty($_POST['type_food'])){
            $type_fooderr="* Enter your type_food";
        }elseif(empty($_POST['mobile'])){
            $mobileerr="* Enter your mobile";
        }elseif(empty($_POST['date'])){
            $dateerr="* Enter your date";
        }elseif(empty($_POST['email'])){
            $emailerr="* Enter your email";
        }else{
            $country = $_POST['country'];
            $city = $_POST['city'];
            $palace = $_POST['palace'];
            $event = $_POST['event'];
            $no = $_POST['no_palace'];
            $type_food=$_POST['type_food'];
            $mobile = $_POST['mobile'];
            $date = $_POST['date'];
            $email = $_POST['email'];
            $query = "Insert into booking(user_id,country,city,palace,event,no_of_palace,type_food,mobile,date,email,status) 
            values($uid,'$country','$city','$palace','$event','$no','$type_food','$mobile','$date','$email','pending')";
            if(mysqli_query($con,$query)){
                $to=$email;
                $subject="Booking Mail";
                $msg="Your booking request sended and replying soon..";
                $header='From: ramugupta1520@gmail.com'."\r\n".
                        'Cc: ramugupta1520@gmail.com'."\r\n".
                        'Content-type:text/html;charset-UTF-8'."\r\n".
                        'X-Mailer: PHP/'. phpversion();
                        if(mail($to,$subject,$msg,$header)){
                            echo "<script>
                            alert('Your booking successfully');
                            window.location.href='booking.php';
                            </script>";
                        }else{
                            print_r('Mailer error:'. error_get_last());
                        }
                
            }
        }
}
?>
    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Booking</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Booking</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->

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
                                class="d-inline-block small-btn fs-6 fw-bold text-dark text-uppercase  rounded-pill px-4 py-1 mb-3 ">Book Us
                            </small>
                            <h2 class="text-dark display-5 mb-5">Where you want Our Services</h2>
                        </div>
                        <form class="" action="<?= $_SERVER['PHP_SELF']?>" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 my-3">
                                    <select class="book-select form-select p-2 " name="country" id="">
                                        <option value="">--Select Country--</option>
                                        <option value="usk">USA</option>
                                        <option value="uk">UK</option>
                                        <option value="india">India</option>
                                    </select>
                                    <small class="text-danger"><?=$countryerr?></small>
                                </div>
                                <div class="col-lg-4 col-md-6 my-3">
                                    <select class="book-select form-select p-2 " name="city" id="">
                                        <option value="">--Select City--</option>
                                        <option value="panjab">Panjab</option>
                                        <option value="uk">UK</option>
                                        <option value="india">India</option>
                                    </select>
                                    <small class="text-danger"><?=$cityerr?></small>
                                </div>
                                <div class="col-lg-4 col-md-6 my-3">
                                    <select class="book-select form-select p-2 " name="palace" id="">
                                        <option value="">--Select Palace--</option>
                                        <option value="uk">UK</option>
                                        <option value="india">India</option>
                                    </select>
                                    <small class="text-danger"><?=$palaceerr?></small>
                                </div>
                                <div class="col-lg-4 col-md-6 my-3">
                                    <select class="book-select form-select p-2 " name="event" id="">
                                        <option value="">--Event Type--</option>
                                        <option value="big_event">Big Event</option>
                                        <option value="small_event">Small Event</option>
                                    </select>
                                    <small class="text-danger"><?=$eventerr?></small>
                                </div>
                                <div class="col-lg-4 col-md-6 my-3">
                                    <select class="book-select form-select p-2 " name="no_palace" id="">
                                        <option value="">--No. Of Palace--</option>
                                        <option value="100_200">100-200</option>
                                        <option value="300_400">300-400</option>
                                        <option value="500_600">500-600</option>
                                        <option value="700_800">700-800</option>
                                        <option value="900_1000">900-1000</option>
                                        <option value="1000+">1000+</option>
                                    </select>
                                    <small class="text-danger"><?=$noerr?></small>
                                </div>
                                <div class="col-lg-4 col-md-6 my-3">
                                    <select class="book-select form-select p-2 " name="type_food" id="">
                                        <option value="">--type food--</option>
                                        <option value="vegetarian">Vegetarian</option>
                                        <option value="non_vegetarian">Non Vegetarian</option>
                                    </select>
                                    <small class="text-danger"><?=$type_fooderr?></small>
                                </div>
                                <div class="col-lg-4 col-md-6 my-3">
                                    <input class="book-input form-control p-2 bg-white" type="text" name="mobile"
                                        placeholder="Your Contact No.">
                                        <small class="text-danger"><?=$mobileerr?></small>
                                </div>
                                <div class="col-lg-4 col-md-6 my-3">
                                    <input class="book-input form-control p-2 bg-white" type="date" name="date"
                                        placeholder="select date">
                                        <small class="text-danger"><?=$dateerr?></small>
                                </div>
                                <div class="col-lg-4 col-md-6 my-3">
                                    <input class="book-input form-control p-2 bg-white" name="email" type="text"
                                        placeholder="Enter Your Email">
                                        <small class="text-danger"><?=$emailerr?></small>
                                </div>
                                <div class="col-lg-12 text-center my-4">
                                    <button type="submit" class="btn book-btn px-5 py-3 rounded-pill">Submit Now</button>
                                </div>
                            </form>
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