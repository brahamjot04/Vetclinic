<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Webpage title -->
    <title>VetClinic</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS Start -->

    <!-- Navbar CSS -->
    <link rel="stylesheet" href="assets/css/navbar-fixed.css">

    <!-- Footer CSS -->
    <link rel="stylesheet" href="assets/css/footer.css">

    <!-- Custom CSS End -->
</head>

<body>
    <!-- Navbar Start -->
    <div class="navbar">
        <?php
        include 'nav.php';
        ?>
    </div>
    <!-- Navbar End -->

    <!-- Footer Start -->
    <div name="footer" class="mt-5">
        <?php
        include 'footer.php';
        ?>
    </div>
    <!-- Footer End -->


    <!-- Bootstrap JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>