<?php
include 'layout/header.php';
?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Menu Data table</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">menu</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <div class="add-data">
      <button><a href="add-menu.php">Add data menu</a></button>
  </div>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Menu Data table</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>id</th>
                  <th>product</th>
                  <th>price</th>
                  <th>discription</th>
                  <th>product-image</th>
                  <th>product-type</th>
                  <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  $sql="Select * from menu";
                  $data= mysqli_query($con,$sql);
                  if(mysqli_num_rows($data) > 0){
                      while($row = mysqli_fetch_assoc($data)){

                  ?>
                <tr>
                  <td><?= $row['id']?></td>
                  <td><?= $row['product']?></td>
                  <td><?= $row['price']?></td>
                  <td><?= $row['discription']?></td>
                  <td><img src="menu/<?= $row['product_image']?>" height="50" width="50"></td>
                  <td><?= $row['product_type']?></td>
                  <td><?= date('d-m-Y',strtotime($row['created_at']))?></td>
                  <td><a class="mx-2" href="menu-update.php?id=<?= $row['id']?>"><span class="bi bi-pencil-square"></span><a class="mx-2" href="menu-delete.php?id=<?= $row['id']?>"><span class="bi bi-trash"></span></td>
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