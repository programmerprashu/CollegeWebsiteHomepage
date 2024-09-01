<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grievane page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        #outer {
            background-image: url(images/Grievance.png);
            background-repeat: no-repeat;
            width: 100%;
            background-size: 100%;
            background-position: center;
            background-attachment: fixed;
        }

        header,
        main,
        footer {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .navbar-text,
        .navbar-brand,
        .nav-link {
            color: white;
        }

        footer {
            background-color: black;
            color: aqua;
            padding: 10px;
            text-align: center;


        }

        footer a {
            margin: 20px;
        }

        #main {
            min-height: 500px;
        }

        .d-block {
            height: 500px;
        }
    </style>
</head>

<body>
    <div id="outer" class="container-fluid">
        <header>
            <div id="nav">
                <nav class="navbar navbar-expand-lg bg-transparent">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"
                            style="font-family: Algerian; font-size: 30px; text-shadow: 0 1px 3px black;">Grievance</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="grievance.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                            </ul>
                            <a href="login.html"><button class="btn btn-outline-info me-5 text-light fw-bold"
                                    type="submit">Sign-in</button></a>
                            <span class="navbar-text">
                                Navbar text with an inline element
                            </span>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div id="main">
                <h1 align="center"
                    style="font-size: 45px; background-color: rgba(255, 255, 255, 0.3); font-family: 'Times New Roman'; font-weight: 800;color: darkred;">
                    Government Polytechnic Baheri Barielly
                </h1>
                <h2 align="center"
                    style="font-size: 25px;background-color: rgba(255, 255, 255, 0.3);  font-family: 'Times New Roman'; font-weight: 800;color: white;">
                    Near by Roorkee baheri Bareilly 243201
                </h2>
                <div class="row p-3">
                    <div class="col-sm-4 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1793806.3780346876!2d76.9704046330224!3d28.583930500933974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a071a0c1df9011%3A0xdcb3eb3dd92db147!2z4KSX4KS14KSw4KWN4KSo4KSu4KWH4KSC4KSfIOCkquClieCksuCkv-Ckn-Clh-CkleCljeCkqOCkv-CklSDgpLDgpYHgpKHgpLzgpJXgpYAg4KSs4KS54KWH4KSw4KWA!5e0!3m2!1shi!2sin!4v1693640493458!5m2!1shi!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-sm-8">
                        <h2 align="center">About Us</h2>
                        <p class="p-5" style="text-align: justify;">At GP Baheri Bareilly our commitment is to provide a
                            safe and
                            intellectually challenging environment
                            that will empower students to become innovative thinkers, creative problem solvers and
                            inspired
                            learners prepared to thrive in the twenty-first century. The college runs 3 courses namely
                            Diploma
                            in Computer Science Engineering, Textile Technology and Mechanical Production Engineering
                            with 75
                            intake each.


                        </p>
                    </div>
                </div>
            </div>


            <div class="row m-auto">
                <div class="col-sm-12" style="border: 1px solid red;">

                    <div class="text-center mt-2">
                        <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: rgb(93, 30, 7);">
                            Photo Gallery
                        </h1>
                        <h2 style="font-family: chiller; font-weight: bold; color: rgb(7, 82, 79);">Lattest pictures
                            from the college
                        </h2>
                    </div>
                    <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <img src="images/clg_gallery/clg2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/clg_gallery/clg3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/clg_gallery/clg5.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

        </main>
        <footer class="fixed-bottom">

            <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="#" target="_blank"><i class="bi bi-github"></i></a>
            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="#" target="_blank"><i class="bi bi-envelope"></i></i></a>
            <a href="#" target="_blank"><i class="bi bi-twitter"></i></a>

        </footer>
    </div>
</body>

</html>