<?php
session_start();
if(!empty($_SESSION['username_adityataufiqmaulana']) AND !empty($_SESSION['password_adityataufiqmaulana'])) {
    header("location:/menu/menu_adityatm.php");
} else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Aditya TM</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
}
    </style>
    <link rel="icon"
      type="image/png"
      href="assets/car_rental.png" />
</head>
<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <h1 style="text-align:center;">CV Rental Aditya Taufiq Maulana</h1>
    <h2 style="text-align: center;">Silahkan Login Terlebih Dahulu!</h2>
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="assets/loginpage.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="POST" action="cek_login_adityatm.php">
          <!-- Username input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="username_adityatm">Username</label>
            <input type="text" name="username_adityataufiqmaulana" id="username_adityataufiqmaulana" class="form-control form-control-lg" />
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="password_adityatm">Password</label>
            <input type="password" name="password_adityataufiqmaulana" id="password_adityataufiqmaulana" class="form-control form-control-lg" />
          </div>


          <!-- Submit button -->
          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?php 
}
?>