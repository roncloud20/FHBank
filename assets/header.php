<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header> 
        <nav >
            <a href="index.php"><h1>FHBank&#174;</h1><em><p>...Expanding your Financial Future</em></p></a>
            <div class="nav-links" id="headerLinks">
                <!-- ---onclick(hideMenu)--- -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="service.php">SERVICES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                </ul>
            </div>
            <!-- ---onclick(hideMenu)--- -->
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </header>

    <banner class="banner">
        <div>
            <h1>Welcome To Flex Horizon Bank</h1>
            <p>Your No1 AI Bank <br/>Solving All your Financial Issues is our concern</p>
            <a href="" class="banner-btn">Bank With Us</a>
        </div>
    </banner>

    <!-- -----JavaScript for Toggle Menu------ -->
    <script>

        var headerLinks = document.getElementById("headerLinks");

        function showMenu(){
            headerLinks.style.right = "0";
        }
        function hideMenu(){
            headerLinks.style.right = "-200px";
        }
    </script>
