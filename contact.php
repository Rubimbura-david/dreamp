<!DOCTYPE html><html><head><title>page2</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav>
            <div class="logo">
       <p>DREAM P</p>
            </div>
            <div class="but">
            <button class="but1" onclick="document.location='login.php'">login</button>
            <button class="but1" onclick="document.location='signup.php'">signup</button></div>
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
        </div><div class="container">
        <?php
$server = "localhost";
$user = "root";
$password = "";
$db = "property";
$con = mysqli_connect($server, $user, $password, $db);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telnbr = $_POST['telnbr'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO contact(username, email, telnbr, comment) VALUES ('$username', '$email', '$telnbr', '$comment')";
    $res = mysqli_query($con, $query);

    if (!$res) {
        $errorMessage = "Message not recorded: " . mysqli_error($con);
        echo '<div class="error-message">' . $errorMessage . '</div>';
    } else {
        $successMessage = "Message recorded successfully.";
        echo '<div class="success-message">' . $successMessage . '</div>';
    } }?>
      <div class="details">
        <h1>ASK ANY QUESTION YOU WANT!</h1>
      </div>
      <div class="side">
        <div class="contact1">
            <h1>contact us</h1>
         <form action="" method="POST">
                <input type="text" class="lab" name="username" placeholder="username" required>
                <input type="email" class="lab" name="email" placeholder="email" required>
                <input type="number" class="lab" name="telnbr" placeholder="phone number" required>
                <textarea class="area" name="comment" placeholder="write your message here!" required></textarea>
                <button id="submit" name="submit">send</button>          
</form>
        </div>
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