<?php include("config.php");?>
<!DOCTYPE html><html><head><title>page2</title>
    <link rel="stylesheet" type="text/css" href="demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav>
            <div class="logo">
       <p>DREAM P</p>
            </div><!--
            <div class="but">
            <button class="but1" onclick="document.location='login.php'">login</button>
            <button class="but1">signup</button></div>-->
            <ul>
           <li><a href="index.php">Home</a></li> 
          <li><a href="property.php">property</a></li>
          <li><a href="contact.php">contact us</a></li>
            <li><a href="about.php">about us</a></li></ul>
        </nav>
        <div class="search"> 
            <table class="search1">
                <tr><td><input type="text" placeholder="Search" class="search2"></td>
                <td><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></td></tr>
            </table>
        </div>
 <div class="sign">
    <h1>SIGNUP</h1>
    <div class="sign1">
        <?php
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $birth=$_POST['birth'];
    $radio=$_POST['radio'];
    $username=$_POST['username'];
    $npass=$_POST['pass2'];
    $query= "INSERT INTO users(firstname,lastname,email,birth,sex,username,password) VALUES('$firstname', '$lastname', '$email','$birth','$radio','$username','$npass')";
    $results = mysqli_query($con,$query);
    if(!$results){
    die("Not inserted".mysqli_error($con));
}
   echo "Recorded successfully";
}
        ?>
        <form action="" method="post">
    <p>First Name</p>
    <input type="text" class="signlabel" placeholder="First Name" name="firstname" id="firstname" required>
    <p>Last Name</p>
    <input type="text" class="signlabel" name="lastname" id="lastname" placeholder="Last Name" required>
    <p>Email</p><input type="email" class="signlabel" name="email" id="email" placeholder="Email" required>
    <p>Birth of Date</p><input type="date" class="signlabel" name="birth" id="birth" placeholder="Birthday" required>
   <p>Male<input type="radio" id="radio" name="radio" value="male"> Female<input type="radio" id="radio" name="radio" value="female" required></p>
   <p>username</p>
    <input type="text" class="signlabel" name="username" id="username" placeholder="username" required>
    <p>new password</p>
    <input type="password" class="signlabel" name="pass2" id="pass2" placeholder="new password" required>
    <p>confirm password</p>
    <input type="password" class="signlabel" placeholder="confirm password" required><br>
    <button class="signbut" name="submit" >signup</button>
    <a href="login.php" style="font-size: 30px;color: brown;margin-left: 7%;">sign in</a>
</form>
 </div></div>
        <footer>
            <div class="container">
                <div class="footer-content">
                  <h3>contact us</h3>
                  <p>email:rubdavid20@gmail.com</p>
                <p>phone:+250786440779</p>
                <p>address: </p>
                </div>
                <div class="footer-content">
                    <h3>quick links</h3>
                    <ul class="list">
                        <li><a href="#">home</a></li>
                    </ul>
                </div>
                <div class="footer-content">  
                    <h3>follow us</h3><ul>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li></ul>
            </div></div>
             <div class="bottom-bar">
                <p>&copy;2023 Dream Property.All rights reserved</p>
             </div></footer>   
</body></html>