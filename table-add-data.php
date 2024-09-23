<?php
include 'include/header.php';
include 'include/sidebar.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
    header('Location:login.php');
}
$houseerr =$villageerr =$blockerr =$diserr =$pinerr =$cityerr =$stateerr =$countryerr = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['house'])){
        $houseerr = "house feild is required";
    }elseif(empty($_POST['village'])){
        $villageerr = "village feild is required";
    }elseif(empty($_POST['block'])){
        $blockerr = "block field is required";
    }elseif(empty($_POST['dis'])){
        $diserr = "dis feild is required";
    }elseif(empty($_POST['pincode'])){
        $pinerr = "pin code feild is required";
    }elseif(empty($_POST['city'])){
        $cityerr = "city feild is required";
    }elseif(empty($_POST['state'])){
        $stateerr = "state feild is required";
    }elseif(empty($_POST['country'])){
        $countryerr = "country feild is required";
    }else{
        $house = $_POST['house'];
        $vill = $_POST['village'];
        $block = $_POST['block'];
        $dis = $_POST['dis'];
        $pin = $_POST['pincode'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $userid = $_SESSION['id'];
        $query = "Insert into address(house_no,vill_col,block_sector,dis,pin_code,city,state,country,user_id) values('$house','$vill','$block','$dis','$pin','$city','$state',' $country','$userid')";
        if(mysqli_query($con,$query)){
            echo "<script>
                    alert('address data added successfully');
                    window.location.href='table.php';
                    </script>";
        }
    }   
}
?>
    <div class="login-container">
        <div class="login-form">
            <img src="images/about.jpg" alt="">
            <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="form">
                <div class="form-group">
                    <label for="">House No.</label>
                    <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="Please Enter Your House number" name="house">
                    <small class="text-danger"><?= $houseerr?></small>
                </div>
                <div class="form-group">
                    <label for="">Village/Colony</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Village Name" name="village">
                    <small class="text-danger"><?= $villageerr?></small>
                </div>
                <div class="form-group">
                    <label for="">Block/Sector</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Block Name" name="block">
                    <small class="text-danger"><?= $blockerr?></small>
                </div>
                <div class="form-group">
                    <label for="">District</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your District Name" name="dis">
                    <small class="text-danger"><?= $diserr?></small>
                </div>
                <div class="form-group">
                    <label for="">Pin Code</label>
                    <input type="number" class="form-control" placeholder="Please Enter Your Pin code" name="pincode">
                    <small class="text-danger"><?= $pinerr?></small>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your City Name" name="city">
                    <small class="text-danger"><?= $cityerr?></small>
                </div>
                <div class="form-group">
                    <label for="">State</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your State Name" name="state">
                    <small class="text-danger"><?= $stateerr?></small>
                </div>
                <div class="form-group">
                    <label for="">Country</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Country Name" name="country">
                    <small class="text-danger"><?= $countryerr?></small>
                </div>
                <button id="btn" type="submit" class="btn btn-block">Save</button>
            </form>
        </div>
    </div>

<?php
include 'include/footer.php';
?>