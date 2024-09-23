<?php
include 'layout/header.php';
?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Services Data table</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">services</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <div class="add-data">
    <button><a href="services-add.php">Add data services</a></button>
  </div>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Services Data table</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>id</th>
                  <th>services-name</th>
                  <th>description</th>
                  <th>services-image</th>
                  <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  $sql="Select * from services";
                  $data= mysqli_query($con,$sql);
                  if(mysqli_num_rows($data) > 0){
                      while($row = mysqli_fetch_assoc($data)){

                  ?>
                <tr>
                  <td><?= $row['id']?></td>
                  <td><?= $row['services_name']?></td>
                  <td><?= $row['description']?></td>
                  <td><img src="service/<?= $row['services_image']?>" height="50px" width="50px"></td>
                  <td><?= date('d-m-Y',strtotime($row['created_at']))?></td>
                  <td><a class="mx-2" href="services-update.php?id=<?= $row['id']?>"><span class="bi bi-pencil-square"></span><a class="mx-2" href="services-delete.php?id=<?= $row['id']?>"><span class="bi bi-trash"></span></td>
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
<?php
include 'layout/footer.php';
?>