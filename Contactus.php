<?php
include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Message Sent Successfully")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Contactus.css">

    <title>Contact Us</title>
</head>

<body class="bg-info-subtle" oncontextmenu="false">
    <div class="navbar">
        <?php
        include 'nav.php';
        ?>
    </div>

    <main>
        <p class="display-1 text-center" style="padding-top: 80px;">
            Contact Us
        </p>
        <div class="container rounded-4 mt-5 mb-5 p-5 border bg-white">
            <div class="row d-flex align-items-center">

                <div class="col-md-6 mt-0 border-end p-5 d-none d-md-block">
                    <img src="assets/images/contact-us-figure.png" class="img-fluid" alt="Vet Clinic" />
                </div>
                <div class="col-md-6 mt-0 border-bottom p-5 d-block d-md-none ">
                    <img src="assets/images/contact-us-figure.png" class="img-fluid" alt="Vet Clinic" />
                </div>
                <div class="col-md-6 mt-0 p-5">
                    <form action="#" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your Message" style="height: 100px" required></textarea>
                            <label for="message">Message</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


<?php
include 'footer.php';
?>
</body>

</html>