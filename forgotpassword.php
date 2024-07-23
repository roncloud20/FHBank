<?php
    $pageTitle = "Forgot Password";
    require_once("assets/header.php");
    $password = $cpassword = "";
    $CpasswordE = $PasswordE = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if(empty($password)){
            $PasswordE = "Password is required";
        }
        if($password !== $cpassword){
            $CpasswordE = "Password do not match";
        }
    }
?>
<link rel="stylesheet" href="fhbCSS/forgotPassword.css">
<div class="container">
    <h1 class="myh1">Reset account Password</h1>
    <p class="myp">Enter a new password</p>
    <form method="post">
        <input type="password" id="password" name="password" placeholder="New Password">
        <span><?php echo "$PasswordE" ?></span>
        <input type="password" id="cpassword" name="cpassword" placeholder="confirm New password">
        <span><?php echo "$CpasswordE" ?></span> <br>
        <button type="submit" value="submit" class="btn-reset"> Submit</button>
    </form>
</div>

