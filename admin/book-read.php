<?php include 'layout/header.php';?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Booking Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Booking</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <!-- <div class="add-data text-end">
        <button><a href="add-menus.php">Add Menu Data</a></button>
    </div> -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Tables</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                  <th>Id</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Palace</th>
                    <th>Event</th>
                    <th>Palace_Number</th>
                    <th>Food_Type</th>
                    <th>Contact_Number</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $sql = "Select * from booking";
                    $data = mysqli_query($con,$sql);
                    if(mysqli_num_rows($data) > 0){
                        while($row = mysqli_fetch_assoc($data)){
                    
                ?>
                  <tr>
                  <th scope="row"><?= $row['id']?></th>
                    <td><?=$row['country']?></td>
                    <td><?=$row['city']?></td>
                    <td><?=$row['palace']?></td>
                    <td><?=$row['event']?></td>
                    <td><?=$row['no_of_palace']?></td>
                    <td><?=$row['type_food']?></td>
                    <td><?=$row['mobile']?></td>
                    <td><?=$row['date']?></td>
                    <td><?=$row['email']?></td>
                    <td><span class="<?= $row['status']=='pending'? 'bg-warning' : 'bg-danger'?> p-1 rounded text-white"><?= ucfirst($row['status'])?></span></td>
                    <td><?= $row['created_at']?></td>
                    <td>
                        <?= $row['status']!='cancelled'? '<a href="book-cancel.php?statusid='
                        .$row['id']. '" class="pe-2"><i class="bi bi-x-circle-fill text-danger fs-5"></i></a>':'' ?>
                        <?php
                            if($row['status']!='accepted' && $row['status']!='cancelled'){
                        ?>
                            <a href="book-conform.php?deleteid=<?= $row['id']?>"><i class="bi bi-check-circle-fill text-success"></i></a>
                        <?php }?>
                        <a href="book-delete.php?deleteid=<?= $row['id']?>"><i class="bi bi-trash"></i></a></td>
                  </tr>
                  <?php
                          
                        }
                    }
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
</main><!-- End #main -->
<?php include 'layout/footer.php';?>