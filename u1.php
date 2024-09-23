<?php
ob_start();
include('include/header.php');
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
    header('Location:login.php');
}

?>
    <div class="d-flex">
        <?php include "include/sidebar.php";?>
        <div class="content">
            <h3>Profile</h3>
            <form class="update-form" method="post" action="profile-update.php" enctype="multipart/form-data">
                <div class="form-group my-4">
                    <label for="Name">Name</label>
                    <input type="text" name="name" class="form-control" id="Name" value="<?= $result['name']?>">
                </div>
                <div class="form-group my-4">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?= $result['email']?>">
                </div>
                <div class="form-group my-4">
                    <label for="mobileNumber">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="mobileNumber" value="<?= $result['phone']?>">
                </div>
                <div class="form-group my-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" id="dob" value="<?= $result['dob']?>">
                </div>
                <div class="form-group my-4">
                    <label>Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" <?= $result['gender']=='male' ? 'checked':''?> type="radio" name="gender" id="gender" value="male" checked>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline my-4">
                        <input class="form-check-input" <?= $result['gender']=='female' ? 'checked':''?> type="radio" name="gender" id="gender" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline my-4">
                        <input class="form-check-input" <?= $result['gender']=='other' ? 'checked':''?> type="radio" name="gender" id="gender" value="other">
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                    <div class="form-group my-4">
                    <label for="state">State</label>
                    <select name="state" class="form-control" id="">
                    <option value="">--Select State--</option>
                    <?php $state=['utter pradesh','panjab','bihar'];
                    foreach($state as $st){

                    ?>
                    <option <?=$result['state']==$st?'selected':''?> value="<?= $st;?>"><?= ucfirst($st);?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="form-group my-4">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" value="<?= $result['city']?>"/>
                </div>
                <div class="form-group my-4">
                    <label for="photo">Photo</label>
                    <input type="file" name="profile" class="form-control">
                    <input type="hidden" name="oldprofile" class="form-control" id="file" value="<?= $result['profile_image']?>">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
<?php
include('include/footer.php');
?>