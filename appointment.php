<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment form</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar Start -->
    <nav>
        <?php
        include 'nav.php';
        ?>
    </nav>
    <!-- Navbar End -->

    <!-- Main Content Start -->
    <main>
        <p class="display-1 text-center" style="padding-top: 90px;">
            Appointment Form
        </p>
        <div class="container rounded-4 mt-5 mb-5 p-5 border bg-white">
            <div class="row d-flex">
                <form action="#" method="post">

                    <!-- Owner Details Start -->
                    <div class="container rounded-3 border shadow-sm mb-5">
                        <div class="h1 ps-4 pt-4">Pet Owner Info</div>
                        <div class="p-3">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label fw-bold">Owner Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label fw-bold">Owner Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                +91
                                            </span>
                                            <input type="number" class="form-control" id="phone" name="phone" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" row">

                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Owner Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Owner Details End -->

                    <!-- Pet Details Start -->
                    <div class="container rounded-3 border mb-5 shadow-sm">
                        <div class="h1 ps-4 pt-4">Pet Info</div>
                        <div class="p-4">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="petname" class="form-label fw-bold">Pet Name</label>
                                        <input type="text" class="form-control" id="petname" name="petname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="petage" class="form-label fw-bold">Pet Age</label>
                                        <input type="number" class="form-control" id="petage" name="petage" required>
                                    </div>
                                </div>
                                <!-- Pet Type Start -->
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Pet Type</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pettype" id="dog" value="dog" required>
                                        <label class="form-check-label" for="dog">
                                            Dog
                                        </label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pettype" id="cat" value="cat" required>
                                        <label class="form-check-label" for="cat">
                                            Cat
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pettype" id="other" value="other" required>
                                        <label class="form-check-label" for="other">
                                            Other
                                        </label>
                                    </div>
                                </div>

                                <!-- Pet Type End -->
                            </div>
                        </div>
                    </div>

                    <!-- Pet Details End -->

                    <!-- Appointment Details Start -->
                    <div class="container rounded-3 border shadow-sm mb-5">
                        <div class="h1 ps-4 pt-4">Appointment Info</div>
                        <div class="p-4">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label for="date" class="form-label fw-bold">Appointment Date</label>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label for="time" class="form-label fw-bold">Appointment Time</label>
                                        <input type="time" class="form-control" id="time" name="time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label fw-bold">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Appointment Details End -->

                    <!-- Submit Button Start -->
                    <div class="text-center">
                        <button type="reset" class="btn btn-danger btn-lg me-3 w-25">Reset</button>
                        <button type="submit" class="btn btn-primary btn-lg w-25">Submit</button>
                    </div>
                    <!-- Submit Button End -->

                </form>
            </div>
        </div>
    </main>
    <!-- Main Content End -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Footer Start -->
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
    <!-- Footer End -->

</body>

</html>