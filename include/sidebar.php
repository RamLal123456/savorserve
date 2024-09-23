<?php
$id=$_SESSION['id'];
$sql="Select * from user where id=$id";
$data=mysqli_query($con,$sql);
$result='';
if(mysqli_num_rows($data) > 0){
    $result=mysqli_fetch_assoc($data);
}
?>
    <div class="sidebar p-3">
        <img src="profile/<?= $result['profile_image']?>" style="width:50px; height:50px; border-radius:50%" alt="">
        <span style="font-size:20px"><?= $result['name']?></span>
            <ul class="nav flex-column">
                <!-- <li class="nav-item">
                    <a class="nav-link fw-bold" href="admin/order.php"><i class="fa fa-credit-card pe-2"></i>ORDERS</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="u1.php"><i class="fa fa-credit-card pe-2"></i>PROFILE UPDATE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="changepass.php"><i class="fa fa-unlock-alt pe-2"></i>CHANGE PASSWORD</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link fw-bold" href="#"><i class="fa fa-credit-card pe-2"></i>PAYMENTS</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="booking-read.php"><i class="fa fa-book pe-2"></i>MY BOOKING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="table.php"><i class="fa fa-credit-card pe-2"></i>MY ADDRESS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="#"><i class="fa fa-user pe-2"></i>ACCOUNT SETTING</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link fw-bold" href="#"><i class="fa fa-user pe-2"></i>MY STUFF</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php"><i class="fa fa-power-off pe-2"></i>Logout</a>
                </li>
            </ul>
    </div>