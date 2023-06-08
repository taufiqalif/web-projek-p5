<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Font+Name:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

  <!-- css login -->
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<!-- <link href="/css/signin.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="<?= base_url('/css/style.css'); ?>">

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo-removebg-preview.png" alt="">
        <span class="navbar-text">Projek P5</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/about'); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/projek'); ?>">Projek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/profil'); ?>">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/login'); ?>">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  
  <!-- End Navbar -->


  <!-- conten -->
<?= $this->renderSection('content'); ?>
<!-- Akhir conten -->


  
  
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="js/alamat.js"></script>
</body>

</html>
