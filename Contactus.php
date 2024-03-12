<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Contactus.css">

    <title>Contact Us</title>
</head>

<body>
    <?php
    include 'nav.php';
    ?>
    <div class="container-fluid p-0 m-0 ">
        <div class="container-fluid ps-5 d-flex flex-row align-items-center justify-content-between" style="background: linear-gradient(to right ,rgb(124,252,0),rgb(42, 41, 41)) ;">
            <div class="col-sm-6 ani">
                <div class="content">
                    <h2>Contact Us</h2>
                    <h2>Contact Us</h2>
                </div>
            </div>
            <img src="assets/images/contact-us-figure.png" alt="/" class="d-none d-md-block object-fit-contain col-sm-6">

            </img>
        </div>
        <div class="container-fluid pt-5 pb-5 row bG ">
            <div class="p-3 col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-10 me-5 ms-auto me-auto mb-5 bG-sub shadow-lg">
                <p class="fs-2 fw-bold text-center">Information Form</p>
                <form class="row p-5 ">
                    <div class="col-sm-12 row mb-3">
                        <!-- <label class="form-label">Name :</label> -->
                        <div class="form-floating ">
                            <input type="text" class="form-control shadow-lg" id="name" name="name" placeholder="enter your name">
                            <label class="ms-3" for="name">Name</label>
                        </div>
                    </div>
                    <div class="col-sm-12 row mb-3">
                        <!-- <label class="form-label">Numbar :</label> -->
                        <div class="form-floating ">
                            <input type="numbar" class="form-control shadow-lg" id="Numbar" name="Numbar" placeholder="enter your Contact Numbar">
                            <label class="ms-3" for="Numbar">Contact numbar</label>
                        </div>
                    </div>
                    <div class="col-sm-12 row mb-3">
                        <!-- <label class="form-label">Email :</label> -->
                        <div class="form-floating ">
                            <input type="email" class="form-control shadow-lg" id="email" name="email" placeholder="enter your email">
                            <label class="ms-3" for="email">Email address</label>
                        </div>
                    </div>
                    <div class="col-sm-12 row mb-3">
                        <!-- <label class="form-label">Address :</label> -->
                        <div class="form-floating ">
                            <input type="text" class="form-control shadow-lg" id="address" name="address" placeholder="enter your address">
                            <label class="ms-3" for="address">Address</label>
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 row mb-3">
                        <label class="form-label">File :</label>
                        <div class="form-group">
                            <input type="file" class="form-control shadow-lg" id="File" name="File" placeholder="File">
                            <label class="ms-3" for="File">file</label>
                        </div>
                    </div> -->
                    <div class="col-sm-12 row mb-3">
                        <!-- <label class="form-label">Text :</label> -->
                        <div class="form-floating ">
                            <textarea class="form-control shadow-lg" id="text" name="text" placeholder="enter your quary"></textarea>
                            <label class="ms-3" for="text">Message</label>
                        </div>
                    </div>
                    <div class=" p-3"><input type="submit" value="submit" class="shadow-lg btn btn-primary float-end ">
                    </div>

                </form>
            </div>
            <div class=" col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 ms-auto me-auto d-flex justify-content-center align-items-start ">
                <div class="shadow-lg p-3">
                    <p class="fs-4 text-center">Contact us through</p>
                    <div class="d-flex flex-row ms-4 mb-3 align-items-center text-center">
                        <div class="border border-dark rounded-circle ps-3 pe-3 pt-2 pb-2">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p class="ms-4 mt-2">+91-98554-68302</p>
                    </div>
                    <div class="d-flex flex-row ms-4 mb-3 align-items-center">
                        <div class="border border-dark rounded-circle ps-3 pe-3 pt-2 pb-2">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <p class="ms-4 mt-2">VetClinic@gmail.com</p>
                    </div>
                    <div class="d-flex flex-row ms-4 mb-3 align-items-center">
                        <div class="border border-dark rounded-circle ps-3 pe-3 pt-2 pb-2">
                            <i class="fa-solid fa-location-pin"></i>
                        </div>
                        <p class="ms-4 mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <hr>
                    <div class="d-flex flex-row justify-content-evenly align-items-center">
                        <a href="https://www.instagram.com/brahamjot_2004" class="text-decoration-none text-dark" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/brahamjot.singh.71/" class="text-decoration-none text-dark" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="https://wa.me/+919855930504" class="text-decoration-none text-dark" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="https://x.com/" class="text-decoration-none text-dark" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>

                        <a href="https://www.linkedin.com/in/brahamjotsingh" class="text-decoration-none text-dark" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>