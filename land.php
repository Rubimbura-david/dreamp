<?php include("config.php");?>
<!DOCTYPE html><html><head>
<script>
  function openBookedPage() {
    var overlay = document.createElement('div');
    overlay.className = 'overlay';
    overlay.addEventListener('click', function() {
      history.back();
    });

    var modal = document.createElement('div');
    modal.className = 'modal';
    var iframe = document.createElement('iframe');
    iframe.src = 'booked.php';
    iframe.frameBorder = 0;
    modal.appendChild(iframe);
    overlay.appendChild(modal);
    document.body.appendChild(overlay);
  }
</script>
     <style>
        .overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index:2;
}

.modal {
  position: absolute;
  width:80%;
  height:600px;
  top:50%;left:50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
.modal iframe{
    width:120%;
    height:600px;
}
    .card {
      width: 300px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      background-color: #f9f9f9;

    }

    .card h2 {
      margin-top: 0;
    }

    .card p {
      margin-bottom: 0;
    }

    .card img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
    }
  </style>   
    <title>page2</title>
    <link rel="stylesheet" type="text/css" href="property.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav>
            <div class="logo">
       <p>DREAM P</p>
            </div>
            <div class="but">
            <button class="but1" onclick="document.location='login.php'">login</button>
            <button class="but1" onclick="document.location='signup.php'">signup</button></div>            <ul>
           <li><a href="index.php">Home</a></li> 
          <li><a href="property.php">property</a></li>
          <li><a href="contact.php">contact us</a></li>
            <li><a href="about.php">about us</a></li></ul>
        </nav>
        <div class="nav1">
            <div class="nav2">
             <select name="links" id="" size="1" onchange="window.location.href=this.value;">
                 <option value="land.php">Land</option><option value="property.php">House</option>
               </select>
            </div>
             <div class="search">
                 <table class="search1">
                     <tr><td><input type="text" placeholder="Search" class="search2"></td>
                     <td><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></td></tr>
                 </table>
             </div></div>
             <div class="next1">DREAM PROPERTY STOCK</div>
             <?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "property";
$con = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
$query = "SELECT * FROM uploaded WHERE category='land'";
$result = mysqli_query($con, $query);
$cardCount = 0;
echo '<div class="row">';
while ($row = mysqli_fetch_assoc($result)) {
    $latitude = $row['latitude'];
    $longitude = $row['longitude'];
    $location1 = $row['province'] . ', ' . $row['district'];
    $location2 = $row['sector'] . ', ' . $row['cell'] . ', ' . $row['village'];
    $price = 'RWF ' . $row['value'] . ' million';
    $propertyId = $row['idupload'];
    $imagePath = $row['file'];
    $imageAlt = "Card Image";
    $cardTitle = $row['category'];
    $cardContent = $row['province'];
    echo '<div class="cards">';
    echo '<div class="card0">';
    echo '<img src="' . $imagePath . '" alt="' . $imageAlt . '">';
    echo '</div>';
    echo '<div class="card1">'.'<p>latitude and longitude</p>';
    echo '<p>' . $cardContent . '</p>';
    echo '<p>' . $location2 . '</p>';
    echo '</div>';
    echo '<h2>'.$price.'</h2>';
    echo '<button onclick="openBookedPage()">book</button>';
    echo '</div>';
    $cardCount++;
    if ($cardCount % 3 == 0) {
        echo '</div>'; 
        echo '<div class="row">'; 
    }
}
if ($cardCount % 3 != 0) {
    echo '</div>'; 
}
mysqli_close($con);
?>
<div class="next"><button>previous</button>
    <button>next</button>for more view</div>
<div class="prop">
        <div class="bar"><a href="https://www.google.com/maps/@-2.2308405,30.2051739,13z?entry=ttu">map</a></div>
<div class="bar"><a href="">booked property</a></div>
<div class="bar"><a href="">change your privacy</a></div>
<div class="bar"><a href="">subscribe</a></div>
</div>
<footer>
    <div class="container">
        <div class="footer-content">
          <h3>contact us</h3>
          <p>email:rubdavid20@gmail.com</p>
        <p>phone:+250786440779</p>
        <p>address:Rwanda,kigali,Kicukiro </p>
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
                                                </body></htm>