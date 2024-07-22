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
<<<<<<< HEAD
    <link rel="stylesheet" href="FAQ.CSS">


<div class="header">
    <h1 class="header-title">FAQ</h1>
    <p class="header-desc"> Frequently Ask Questions</p>

</div>

<div class="faq">
    <div class="faq-name">
        <h1 class="faq-header"> Have <br> Questions?</h1>
        <!-- <img class="faq-img" src="question.jpg"> -->
    </div>
    <div class="faq-box">
      <div class="faq-wrapper">
        <input type="checkbox" class="faq-trigger" id="faq-trigger-1">
        <label class="faq-title" for="faq-trigger-1">What qualities do u look for in candidates?</label>
        <div class="faq-detail">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis consectetur sapiente sit dignissimos molestiae deleniti, minima sint doloremque sunt consequatur sequi aliquid fugit exercitationem totam ipsum corrupti, quo veritatis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae magni recusandae at temporibus tenetur sunt sequi minus velit, quas rem facere voluptatibus veritatis eum doloribus neque fuga perferendis fugit dolorum!</p>
        </div>
      </div>
      <div class="faq-wrapper">
        <input type="checkbox" class="faq-trigger" id="faq-trigger-2">
        <label class="faq-title" for="faq-trigger-2">Do you offer Flexible Working?</label>
        <div class="faq-detail">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis consectetur sapiente sit dignissimos molestiae deleniti, minima sint doloremque sunt consequatur sequi aliquid fugit exercitationem totam ipsum corrupti, quo veritatis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae magni recusandae at temporibus tenetur sunt sequi minus velit, quas rem facere voluptatibus veritatis eum doloribus neque fuga perferendis fugit dolorum!</p>
        </div>
      </div>
      <div class="faq-wrapper">
        <input type="checkbox" class="faq-trigger" id="faq-trigger-3">
        <label class="faq-title" for="faq-trigger-3">How do i see what jobs are available?</label>
        <div class="faq-detail">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis consectetur sapiente sit dignissimos molestiae deleniti, minima sint doloremque sunt consequatur sequi aliquid fugit exercitationem totam ipsum corrupti, quo veritatis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae magni recusandae at temporibus tenetur sunt sequi minus velit, quas rem facere voluptatibus veritatis eum doloribus neque fuga perferendis fugit dolorum!</p>
        </div>
      </div>
      <div class="faq-wrapper">
        <input type="checkbox" class="faq-trigger" id="faq-trigger-4">
        <label class="faq-title" for="faq-trigger-4">How do i build a career at the Company?</label>
        <div class="faq-detail">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis consectetur sapiente sit dignissimos molestiae deleniti, minima sint doloremque sunt consequatur sequi aliquid fugit exercitationem totam ipsum corrupti, quo veritatis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae magni recusandae at temporibus tenetur sunt sequi minus velit, quas rem facere voluptatibus veritatis eum doloribus neque fuga perferendis fugit dolorum!</p>
        </div>
      </div>
    </div>

</div>
  
  
    
</body>
</html>
=======
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
>>>>>>> a9edccffa7b2b364b7ef6bc902155510e43eb45f
