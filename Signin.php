<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/Signin.css">


    <link rel="stylesheet" href="assets/css/navbar-fixed.css">

    <!-- Webpage Title -->
    <title>Signin</title>
</head>

<body>
    <div class="navbar">
        <?php
        include 'nav.php';
        ?>
    </div>

    <div class="container-fluid m-0 p-0">
        <img class="object-fit-cover w-100 position-fixed z-n1 " style="height: 100vh;" src="../images/signin.jpg" alt="">
        <div class="w-100 d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class=" main p-5 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-10 ">
                <div class="text-center fs-2 fw-bold">Signin</div>
                <form class="row">
                    <div class="col-sm-12 row mb-3">
                        <label class="form-label">Email :</label>
                        <div class="form-floating ">
                            <input type="email" class="form-control" id="email" name="email" placeholder="enter your email">
                            <label class="ms-3" for="email">Email address</label>
                        </div>
                    </div>
                    <div class="col-sm-12 row mb-3">
                        <label class="form-label">Password :</label>
                        <div class="form-floating ">
                            <input type="password" class="form-control" id="password" name="password" placeholder="enter your password">
                            <label class="ms-3" for="password">Password</label>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-evenly align-items-center">
                        <div class="w-25 border border-1 border-dark"></div>
                        <p>OR</p>
                        <div class="w-25 border border-1 border-dark"></div>
                    </div>
                    <div class="row p-3"><input type="submit" value="Google" class="btn btn-success"></div>
                    <hr>
                    <div class="row p-3"><input type="submit" value="submit" class="btn btn-primary"></div>

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>