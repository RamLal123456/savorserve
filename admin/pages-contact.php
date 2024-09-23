<?php
include 'layout/header.php';
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Contact</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="contact.php">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Response</th>
            <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
            <th>Action</th>
        </tr>

        <?php
        $query = "Select * from contact";
        $data = mysqli_query($con,$query);
        if(mysqli_num_rows($data) > 0){
            while($row = mysqli_fetch_assoc($data)){
                ?>

        <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['name']?></td>
            <td><?= $row['email']?></td>
            <td><?= $row['message']?></td>
            <td><?= $row['response']?></td>
            <td><?= date('d-m-Y',strtotime($row['create_at']))?></td>
            <td><a class="mx-2" href="contact-update.php?id=<?=$row['id']?>"><span class="bi bi-pencil-square"></span></a><span><a href="contact-delete.php?id=<?=$row['id']?>"><span class="bi bi-trash"></span></a></td>
        </tr>

            <?php
            }
          }
         ?>
  </table>


  </main><!-- End #main -->

<?php
include 'layout/footer.php';
?>