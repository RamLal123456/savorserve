<?php
ob_start();
include 'layout/header.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $uid = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $response = $_POST['response'];
        $query = "Update contact set name='$name', email='$email', message='$message', response='$response' where id=$uid";
        if(mysqli_query($con,$query))
        {
          $to=$email;
          $subject="Booking Mail";
          $msg="Your booking request sended and replying soon..";
          $header='From: ramugupta1520@gmail.com'."\r\n".
                  'Cc: ramugupta1520@gmail.com'."\r\n".
                  'Content-type:text/html;charset-UTF-8'."\r\n".
                  'X-Mailer: PHP/'. phpversion();
                  if(mail($to,$subject,$msg,$header)){
                    echo "<script>
                        alert('Your Data update successfully');
                        window.location.href='pages-contact.php';
                    </script>";
                  }
                  // else{
                  //   echo "<script>
                  //       alert('Something went wrong');
                  //       window.location.href='pages-contact.php';
                  //   </script>"; 
                  // }
                  else{
                    print_r('Mailer error:'. error_get_last());
                  }
        }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "Select * from contact where id=$id";
    $data = mysqli_query($con,$query);
    if(mysqli_num_rows($data)>0){
        $single = mysqli_fetch_assoc($data);
    }
    
?>
<main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">MyAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Contact</h5>
                    <p class="text-center small">The contact form is currently inactive. Get a functionl and working contact from with Ajax & Pl</p>
                    <a href="">Download Now</a>
                  </div>

                  <form action="<?= $_SERVER['PHP_SELF']?>" method='post'>
                    <div class="col-12">
                      <input type="hidden" value="<?=$_GET['id']?>" name="uid">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" value="<?= $single['name']?>" class="form-control" id="yourName">
                      <small class="text-danger"></small>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="text" name="email" value="<?= $single['email']?>" class="form-control" id="yourEmail" >
                      <small class="text-danger"></small>
                    </div>

                    <div class="col-12">
                      <label for="yourMessage" class="form-label">Message</label>
                      <textarea type="text" name="message" class="form-control" id="yourMessage"><?= $single['message']?></textarea>
                      <small class="text-danger"></small>
                    </div>

                    <div class="col-12">
                      <label for="yourrespons" class="form-label">Respons</label>
                     <textarea type="text" name="response" class="form-control" id="yourRespons"><?= $single['response']?></textarea>
                      <small class="text-danger"></small>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Submit Now</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</main>

<?php 
    }
    else{
      header('Location:pages-contact.php');
    }
   
include 'layout/footer.php'
?>