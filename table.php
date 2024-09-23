<?php
include 'include/header.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
    header('Location:login.php');
}
$userid=$_SESSION['id'];
$selsql="Select * from address where user_id=$userid";
?>
<div class="d-flex">
    <?php
    include 'include/sidebar.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-5">
                <h2 class="" style="text-align:center">My Address</h2>
                <a type="button" href="table-add-data.php" class="btn btn-outline-warning">Add Data</a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>House No.</th>
                            <th>Vill/Colony</th>
                            <th>Block/Sector</th>
                            <th>Dic</th>
                            <th>Pin Code</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                            <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                            <th>Action</th>
                            <?php
                            $sel= mysqli_query($con,$selsql);
                            if(mysqli_num_rows($sel) > 0){
                                while($seldata = mysqli_fetch_assoc($sel)){

                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><?= $seldata['id']?></td>
                            <td><?= $seldata['house_no']?></td>
                            <td><?= $seldata['vill_col']?></td>
                            <td><?= $seldata['block_sector']?></td>
                            <td><?= $seldata['dis']?></td>
                            <td><?= $seldata['pin_code']?></td>
                            <td><?= $seldata['city']?></td>
                            <td><?= $seldata['state']?></td>
                            <td><?= $seldata['country']?></td>
                            <td><?= date('d-m-Y',strtotime($seldata['created_at']))?></td>
                            <td><a class="mx-2" href="table-delete.php?id=<?= $seldata['id']?>"><span class="fa fa-trash"></span></td>
                        </tr>
                        <?php
                        }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include 'include/footer.php';
?>