<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="assets/styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   
    
    <!-- <link href="fhbCSS/style1.css" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"> -->

</head>
<body>

    <!-- <header> 
        <nav >  -->
            <!-- <img src="assets/images/bbb.jpg" alt="Bootstrap"  height="40"> -->
            <!-- <a href="index.php"><h1>FHBank&#174;</h1> <em><p>...Expanding your Financial Future</p></em> </a>

            <div class="nav-links" id="headerLinks"> -->

                <!-- ---onclick(hideMenu)--- -->

                <!-- <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="service.php">SERVICES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                    <li><a href="registration.php">REGISTER</a></li>
                </ul>
            </div> -->

            <!-- ---onclick(showMenu)--- -->

            <!-- <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </header> -->

    <!-- <banner class="banner">
        <div>
            <h1>Welcome To Flex Horizon Bank</h1>
            <p>Your No1 AI Bank <br/>Solving All your Financial Issues is our concern</p>
            <a href="" class="banner-btn">Bank With Us</a>
        </div>
    </banner> -->

    <!-- -----JavaScript for Toggle Menu------ -->

    <!-- <script>

        var headerLinks = document.getElementById("headerLinks");

        function showMenu(){
            headerLinks.style.right = "0";
        }
        function hideMenu(){
            headerLinks.style.right = "-200px";
        }
    </script> -->




    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="assets/images/bbb.jpg" height="50vh"></h1> <em><p>...Expanding your Financial Future</p></em></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" id="nav-Link" aria-current="page" href="index.php"> HOME </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-Link"  href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-Link" href="contact.php">CONTACT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="service.php">Our Services</a></li>
                        <li><a class="dropdown-item" href="privacy.php">Privacy Policy</a></li>
                        <li><a class="dropdown-item" href="FAQ.php">FAQ</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Account</a></li>
                    </ul>
                </li>
            </ul>
        <span class="navbar-text">
        <a href="registration.php">REGISTER</a>
        </span>
    </div>
</div>
</nav>

    </header>

    
