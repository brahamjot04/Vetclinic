<head>

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Navbar CSS -->
  <link rel="stylesheet" href="assets/css/navbar-fixed.css">

</head>

<!-- Navbar for Mobile Start -->
<div>
  <nav class="navbar nav2 bg-dark border-bottom border-body ps-md-5 ps-sm-5 pe-md-5 pe-sm-5 fixed-top" data-bs-theme="dark">
    <div class="container-fluid">

      <!-- Logo Start -->
      <a class="navbar-brand" href="./index.php">
        <h1>VetClinic</h1>
      </a>
      <!-- Logo End -->

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Start -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <h1>VetClinic</h1>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Navbar Buttons Start -->
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

            <!-- Navitem Home Start -->
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="./index.php">Home</a>
            </li>
            <!-- Navitem Home End -->

            <!-- Navitem About Start -->
            <li class="nav-item">
              <a class="nav-link text-light" href="./About.php">About</a>
            </li>
            <!-- Navitem About End -->

            <!-- Navitem Contact Start -->
            <li class="nav-item">
              <a class="nav-link text-light" href="./Contactus.php">Contact</a>
            </li>
            <!-- Navbar Contact End -->
          </ul>

          <!-- Search field Start -->
          <form class="d-flex border border-2 border-light rounded-pill" role="search">
            <input class="form-control me-2 rounded-start-pill border-0 search btn btn-outline-info bg-dark" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn search btn-outline-success border-0 rounded-end-circle" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
          <!-- Search Field End -->

        </div>
        <!-- navbar Buttons End -->

        <!-- Login/Signup Start -->
        <div class="d-flex flex-row mb-5 align-items-center justify-content-center container-fluid">
          <div class="text-light w-50 text-center border-end border-3 border-light ps-3 pe-3">
            <a href="./Signin.php" class="text-light text-decoration-none">Login</a>
          </div>
          <div class="text-light w-50 text-center ps-3 pe-3"><a href="./Signup.php" class="text-light text-decoration-none">Signup</a></div>
        </div>
        <!-- Login/Signup End -->

      </div>
      <!-- Navbar End -->
    </div>
  </nav>
</div>
<!-- Navbar for Mobile End -->

<!-- Navbar for Desktop Start -->
<div>

  <nav class="navbar nav1 fixed-top navbar-expand-lg border-bottom border-body bg-dark" data-bs-theme="dark">
    <div class="container-fluid ms-5 me-5">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <!-- Logo Start -->
        <a class="navbar-brand" href="./index.php">
          <h1>VetClinic</h1>
        </a>
        <!-- Logo End -->

        <div class="d-flex flex-row justify-content-center align-items-center ms-auto me-auto">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Navitem Home Start -->
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="./index.php">Home</a>
            </li>
            <!-- Navitem Home End -->

            <!-- Navitem About Start -->
            <li class="nav-item">
              <a class="nav-link text-light" href="./About.php">About</a>
            </li>
            <!-- Navitem About End -->

            <!-- Navitem Contact Start -->
            <li class="nav-item">
              <a class="nav-link text-light" href="./Contactus.php">Contact</a>
            </li>
            <!-- Navbar Contact End -->
          </ul>

          <!-- Search field Start -->
          <form class="d-flex border border-2 border-light rounded-pill" role="search">
            <input class="form-control me-2 rounded-start-pill border-0 text-white search btn btn-outline-info" type="search" placeholder="Search" aria-label="Search" style="color: white" />
            <button class="search btn btn-outline-success border-0 rounded-end-circle" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
          <!-- Search Field End -->

        </div>

        <!-- Login/Signup Start -->
        <div class="d-flex flex-row align-items-center justify-content-center">
          <div class="text-light border-end border-3 border-light ps-3 pe-3">
            <a href="./Signin.php" class="text-decoration-none text-light">Login</a>
          </div>
          <div class="ps-3 pe-3"><a href="./Signup.php" class="text-decoration-none text-light">Signup</a></div>
        </div>
        <!-- Login/Signup End -->

      </div>
    </div>
  </nav>
</div>
<!-- Navbar for Desktop End -->