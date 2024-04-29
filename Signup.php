<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user data from the form
    $name = $_POST["name"];
    $contactNumber = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    include 'db_connection.php';

    // Store the user data in the database
    $sql = "INSERT INTO users (name, contact_number, email, password) VALUES ('$name', '$contactNumber', '$email', '$password')";
    if ($mysqli->query($sql)) {
        header("Location: success.php");
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $mysqli->error . "')</script>";
    }

    // Redirect to a success page
    header("Location: success.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/Signup.css">


    <title>Signup</title>
</head>

<body>
    <div class="navbar">
        <?php
        include 'nav.php';
        ?>
    </div>

    <div class="container-fluid p-0" style="margin-top: 50px;">
        <img class="object-fit-cover w-100 position-fixed top-0 z-n1 " style="height: 100vh; filter:blur(5px)" src="./assets/images/pattern-1708767434709-5127.jpg" alt="/">
        <div class="container-fluid d-sm-flex flex-row align-items-center justify-content-center" style="height: 100vh;">
            <div class="col-xxl-10 col-xl-10 col-lg-11 col-md-11 col-sm-11 main row bg-light shadow-lg border boredr-2 border-light rounded-4">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 p-5 ">
                    <p class="text-center fs-2 fw-bold">Signup</p>
                    <form class="row" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class=" row mb-3">
                            <!-- <label class="form-label">Name :</label> -->
                            <div class="form-floating ">
                                <input type="name" class="form-control" id="name" name="name" placeholder="enter your email">
                                <label class="ms-3" for="name">Name</label>
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <!-- <label class="form-label">Contact Number :</label> -->
                            <div class="form-floating ">
                                <input type="number" class="form-control" id="number" name="number" placeholder="enter your contact number">
                                <label class="ms-3" for="number">Contact number</label>
                            </div>
                        </div>
                        <!-- <hr> -->
                        <div class=" row mb-3">
                            <!-- <label class="form-label">Email :</label> -->
                            <div class="form-floating ">
                                <input type="email" class="form-control" id="email" name="email" placeholder="enter your email">
                                <label class="ms-3" for="email">Email address</label>
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <!-- <label class="form-label">Password :</label> -->
                            <div class="form-floating ">
                                <input type="password" class="form-control" id="password" name="password" placeholder="enter your password">
                                <label class="ms-3" for="password">Password</label>
                            </div>
                        </div>

                        <div class="row p-3"><input type="submit" value="Sign Up" class="btn btn-primary"></div>

                    </form>
                </div>
                <img class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 pt-5 pb-5 ps-0  d-md-block d-none object-fit-contain" src="./assets/images/vet-clinic-png-veterinary-clinic-animal-hospital-in-sanford-lake-mary-area-432.png" alt="/">
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>