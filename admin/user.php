<?php
include 'layout/header.php';
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">User</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data table</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  $sql="Select * from user";
                  $data= mysqli_query($con,$sql);
                  if(mysqli_num_rows($data) > 0){
                      while($row = mysqli_fetch_assoc($data)){

                  ?>
                <tr>
                  <td><?= $row['id']?></td>
                  <td><?= $row['name']?></td>
                  <td><?= $row['phone']?></td>
                  <td><?= $row['email']?></td>
                  <td><?= $row['password']?></td>
                  <td><?= $row['role']==0?'user':'admin'?></td>
                  <td><?= date('d-m-Y',strtotime($row['created_at']))?></td>
                  <td><a class="mx-2" href="user-edit.php?id=<?= $row['id']?>"><span class="bi bi-pencil-square"></span></a><span><a href="user-delete.php?id=<?= $row['id']?>"><span class="bi bi-trash"></span></a></td>
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