<?php

session_start();
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">
      <?php
     if (isset($_GET['msg'])) {
        ?>
        <p class="text-danger"><?php echo $_GET['msg']; ?></p>
        <?php
    }
    ?>

        <!-- <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div> -->

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form  action="signininProcess.php" method="post"  style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign in  Form</h3>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">Name</label>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form2Example18" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="button">Sign in</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <!-- <p> have an account? <a href="#!" class="link-info">Register here</a></p> -->

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="1.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>


<script src="js/bootstrap.bundle.min.js"></script>
<!-- Section: Design Block -->
</body>
</html>