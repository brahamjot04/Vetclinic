<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}

// Include database connection
include 'db_connection.php';

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if email is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($mysqli, $email);
    $password = mysqli_real_escape_string($mysqli, $password);

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = '$email' AND password = '$password'";
        $result = $mysqli->query($sql);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            header("Location: dashboard.php");
            exit;
        } else {
            $password_err = "The password you entered is incorrect.";
            $email_err = "The email you entered is incorrect.";
        }
    }

    // Close connection
    $mysqli->close();
}
?>

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
        <img class="object-fit-cover w-100 position-fixed z-n1 blur-image" style="height: 100vh; filter:blur(5px);" src="./assets/images/signin.jpg" alt="">
        <div class="w-100 d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class=" main p-5 col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-10 ">
                <div class="text-center fs-2 fw-bold">Signin</div>
                <form class="row" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="col-sm-12 row mb-3 mt-4">
                        <!-- <label class="form-label">Email :</label> -->
                        <div class="form-floating ">
                            <input type="email" class="form-control" id="email" name="email" placeholder="enter your email" value="<?php echo $email; ?>">
                            <label class="ms-3" for="email">Email address</label>
                        </div>
                        <span class="text-danger"><?php echo $email_err; ?></span>
                    </div>
                    <div class="col-sm-12 row mb-3">
                        <!-- <label class="form-label">Password :</label> -->
                        <div class="form-floating ">
                            <input type="password" class="form-control" id="password" name="password" placeholder="enter your password">
                            <label class="ms-3" for="password">Password</label>
                        </div>
                        <span class="text-danger"><?php echo $password_err; ?></span>
                    </div>
                    <div class="d-flex flex-row justify-content-evenly align-items-center">
                        <!-- <div class="w-25 border border-1 border-dark"></div>
                        <p>OR</p>
                        <div class="w-25 border border-1 border-dark"></div> -->
                    </div>
                    <div class="row p-3"><input type="submit" value="Sign In" class="btn btn-primary"></div>
                    <!-- <div class="row p-3"><input type="submit" value="Google" class="btn btn-success"></div> -->
                    <!-- <hr> -->

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>


</html>