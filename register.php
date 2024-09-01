<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        #outer {
            background-image: url(images/Grievance.png);
            min-height: 100%;
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
        footer{
            background-color: black;
            color: aqua;
            padding: 10px;
            text-align: center;
           

        }
        footer a{
            margin: 20px;
        }
        #main{
            min-height: 600px;
        }
        table{
            width: 90%;

        }
        table td{
            width: 50%;
            
        }
        td input{
            padding: 5px;
            width: 100%;
            border-radius: 8px;
            border: none;
        }
        td select{
            padding: 5px;
            width: 100%;
            border-radius: 8px;
            border: none;
        }
        .radio{
           width: auto;
           text-align: center;
        }
        input::placeholder{
            color:rgba(0, 0, 0, 0.8);
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
                            <a href=""><button class="btn btn-outline-info me-5 text-light fw-bold"
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
                <div class="row ">
                    <div class="col-sm-4">
                        <img src="images/clgpic2.jpg" alt="" width="100%" height="100%" class="rounded-5"
                            style="box-shadow: 3px 6px 12px white;">
                    </div>
                    <div class="col-sm-7 p-3 m-3" style="box-shadow: 3px 6px 12px black; background-color:  rgba(220, 220, 220, 0.8); border-radius: 8px;">
                        
                           <h3 align="center">Registeration form</h3> 
                        <form action="reg_code.php" method="post">
                       <table cellpadding="12">
                        <tr>
                            <td><input type="text" name="n" placeholder="Enter Your Name"></td>
                            <td><input type="text" name="fn" placeholder="Enter Your F'Name"></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="em" placeholder="Enter Your email"></td>
                            <td><input type="number" name="num" placeholder="Enter Your contact"></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="npass" placeholder="New password"></td>
                            <td><input type="password" name="cpass" placeholder="Confirm password"></td>
                        </tr>
                        <tr >
                            <td > Gender: <input   type="radio" class="radio" name="a" value="male" >Male
                            <input type="radio" value="female" name="a" class="radio" >Female</td>
                            <td>
                                <select  id="" name="branch">
                                    <option value="">--select branch</option>
                                    <option>CS</option>
                                    <option>MP</option>
                                    <option>TT</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2"><input type="submit" value="Register"></td>
                        </tr>
                       </table>
                    </form>
                    <div  class="text-center">
                     <a href="login.html">If you are already registered click here to login</a>
                    </div>
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