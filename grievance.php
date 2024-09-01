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
            background-image: url(images/grevnc.jpg);
           height:100%;
        
            background-repeat: no-repeat;
            width: 100%;
            background-size:100%;
            background-position: center;
            background-attachment: fixed;
        

        }

        header,
        main,
        footer {
            background-color: rgba(0, 0, 0, 0.3);
        }
        /* #main{
           height:700px;      
          } */
        .navbar-text,
        .navbar-brand,
        .nav-link {
            color: white;
        }
        footer{
            background-color: black;
            color: aqua;
            padding: 10px;
            text-align: center;
           

        }
        footer a{
            margin: 20px;
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
                                    <a class="nav-link " aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                            </ul>
                            <a href="login.php"><button class="btn btn-outline-info me-5 text-light fw-bold"
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
                    style="font-size: 45px; background-color: rgba(255, 255, 255, 0.3); font-family: 'Times New Roman'; font-weight: 800;color: royalblue;">
                    Government Polytechnic Baheri Barielly
                </h1>
                <h2 align="center"
                    style="font-size: 25px;background-color: rgba(255, 255, 255, 0.3);  font-family: 'Times New Roman'; font-weight: 800;color: white;">
                    Near by Roorkee baheri Bareilly 243201
                </h2>
                <div class="row p-3">
                    <div class="col-sm-4">
                        <img src="images/banner_5.jpg" alt="" class="w-100 h-100 rounded-5"
                            style="box-shadow: 3px 6px 12px white;">
                    </div>
                    <div class="col-sm-8">
                        <p class="p-5" style="text-align: justify; color:green;">Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit.
                            Itaque, pariatur aperiam eaque at tenetur
                            perspiciatis corrupti molestiae molestias ab nisi voluptatum, veniam ratione error iusto
                            quas eum
                            quisquam commodi adipisci tempora. Molestias numquam expedita optio ipsum cupiditate nisi
                            sapiente
                            ducimus asperiores mollitia impedit tenetur culpa nostrum recusandae, quasi non quia magni
                            in beatae
                            ipsa maiores! Quisquam perspiciatis quod vitae dolorem debitis, laudantium repellendus,
                            voluptatem
                            aut delectus sint harum in soluta eveniet voluptatum asperiores nisi reprehenderit assumenda
                            est?
                            Molestiae quo dignissimos rerum, hic dicta necessitatibus assumenda a ad! Odit impedit nobis
                            provident, sapiente, nulla beatae, magnam fugiat fuga ipsum veritatis earum?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dicta earum tempora
                            dignissimos, nemo
                            officiis nesciunt suscipit quos rem architecto labore eligendi, tempore neque fuga
                            consequuntur. Non
                            praesentium quasi cupiditate accusantium blanditiis odit sapiente ipsa doloribus quos rem
                            illo
                            perspiciatis dignissimos dolores ipsum, impedit aspernatur repellat, magni, quibusdam nulla
                            in.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, consequuntur! Velit, esse ratione. Sequi quia harum cupiditate sint error. Ut reprehenderit mollitia dignissimos itaque dolores repellat vel ex odio debitis culpa magnam laborum, illo ad beatae eum quis, voluptas omnis nemo officiis consequatur veniam. Adipisci, dolore quas temporibus optio, 
                            praesentium, fugiat eius id incidunt obcaecati ab hic pariatur ipsam vitae!
                        </p>
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