<?php
include 'include/header.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
    header('Location:login.php');
}
?><div class="d-flex">
<?php
include 'include/sidebar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 py-5">
            <h2 class="" style="text-align:center">My Booking</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Country</th>
        <th>City</th>
        <th>Palace</th>
        <th>Event</th>
        <th>No.Of Palace</th>
        <th>Type of Food</th>
        <th>Mobile</th>
        <th>Data</th>
        <th>Email</th>
        <th>Status</th>
        <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
        <th>Action</th>
    </tr>
    <?php
    $userid=$_SESSION['id'];
    $selsql="Select * from booking where user_id=$userid";
    $sel= mysqli_query($con,$selsql);
    if(mysqli_num_rows($sel) > 0){
        while($row = mysqli_fetch_assoc($sel)){

    ?>
    <tr>
        <td scope="row"><?= $row['id']?></td>
        <td><?=$row['country']?></td>
        <td><?=$row['city']?></td>
        <td><?=$row['palace']?></td>
        <td><?=$row['event']?></td>
        <td><?=$row['no_of_palace']?></td>
        <td><?=$row['type_food']?></td>
        <td><?=$row['mobile']?></td>
        <td><?=$row['date']?></td>
        <td><?=$row['email']?></td>
        <td><span class="bg-warning p-1 rounded text-white"><?= ucfirst($row['status'])?></span></td>
        <td><?= date('d-m-Y',strtotime($row['created_at']))?></td>
        <td><a class="mx-2" href="booking-delete.php?id=<?= $row['id']?>"><span class="fa fa-trash"></span><a class="mx-2" href="booking-update.php?id=<?= $row['id']?>"><span class="fa fa-times-circle text-danger fs-5"></span></td>
    </tr>
    <?php
    }
    }
    ?>
</table>
</div>
        </div>
    </div>
</div>
<?php
include 'include/footer.php';
?>