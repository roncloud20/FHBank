<?php
$pageTitle = 'Register your account';
    require_once('assets/header.php');
$firstname = $lastname = $email = $password = $cpassword = '';
    $firstnameerror = $lastnameerror =$emailerror =$passerror = $cpasserror = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if(empty($firstname)){
            $firstnameerror = "firstname is required";
        }
        if(empty($lastname)){
            $lastnameerror = "lastname is required";
        }
        if(empty($email)){
            $emailerror = "email is required";
        }
        if(empty($password)){
            $passerror = "password is required";
        }
        if(empty($cpassword)){
            $cpasserror = "password is required";
        }
        if ($password !== $cpassword){
            $cpasserror = "password is not correct";
        }
    }
?>
<link rel="stylesheet" href="fhbCSS/register.css"/>

<h1 class="top">Register with FHBANK</h1>
<div class="container">
        <h2>Bank Registration Form</h2>
        <form  method="post">
            
            <label for="firstname">Firstname:</label>
            <input type="text" id="firstname" name="firstname">
            <span> <?php echo "$firstnameerror" ?> </span>


            <label for="lastname">lastname:</label>
            <input type="text" id="lastname" name="lastname">
            <span> <?php echo "$lastnameerror" ?></span?>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <span> <?php echo "$emailerror" ?></span>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span><?php echo "$passerror" ?></span> 

            <label for="cpassword">Confirm Password:</label>
            <input type="password" id="cpassword" name="cpassword">
            <span><?= $cpasserror ?></span>

            <label for="account_type">Account Type:</label>
            <select id="account_type" name="account_type" required>
                <option value="">Select Account Type</option>
                <option value="savings">Savings</option>
                <option value="current">Current</option>
            </select>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
