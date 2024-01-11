<!DOCTYPE html><html><head><title>page2</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    </head>
    <body>
        <nav>
          <div class="but">
            <button class="but1" onclick="document.location='login.php'">login</button>
            <button class="but1" onclick="document.location='signup.php'">signup</button></div> 
            <div class="dropdown">
              <button class="dropdown-toggle" onclick="toggleDropdown()">
                <i class="fas fa-bars"></i>
              </button>
            <div class="dropdown-menu">
              <a href="profile.php"><i class="fa-solid fa-user"></i>Profile</a>
              <a href="booked.php"><i class="fa-solid fa-cart-shopping"></i>booked properties</a>
            </div>
          </div>
            </div>
            <ul>
           <li><a href="index.php">Home</a></li> 
          <li><a href="property.php">property</a></li>
          <li><a href="contact.php">contact us</a></li>
<li><a href="about.php">about us</a></li></ul> <div class="admin">
<table><tr><td width="5%"><i class="fa-solid fa-lock"></i></td>
<td><button onclick="document.location='adminlogin.php'">Admin Login</button></td></tr></table></div>
        </nav>  
        <div class="java">
          <h1 id="demo"></h1></div>      
<script>
const hour = new Date().getHours(); 
let greeting;
if (hour>=1 && hour<12) {
  greeting = "Good morning,welcome to DREAM PROPERTY";
} else if(hour>=12 && hour<18){
  greeting = "Good afternoon,welcome to DREAM PROPERTY";
}
else{
    greeting="Good evening,welcome to DREAM PROPERTY";
}
document.getElementById("demo").innerHTML = greeting;
setTimeout(()=>{
    var text=document.getElementById('demo');
    text.style.display='none';
},5000
);
function toggleDropdown() {
            var dropdownMenu = document.querySelector(".dropdown-menu");
            dropdownMenu.classList.toggle("show");}
document.addEventListener("DOMContentLoaded", function() {
  let slideIndex = 0;
  const slides = document.querySelectorAll(".slide");
  showSlide(slideIndex);
  function showSlide(index) {
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[index].style.display = "block";
  }
  function nextSlide() {
    slideIndex++;
    if (slideIndex >= slides.length) {
      slideIndex = 0;
    }
    showSlide(slideIndex);
  }
  setInterval(nextSlide, 3000);
});
</script>
        <div class="search">
            <table class="search1">
                <tr><td><input type="text" placeholder="Search" class="search2"></td>
                <td><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></td></tr>
            </table>
        </div><div class="ads">
        <div class="home1">
            <img src="download (2).png">
        </div>
        <div class="home2"><img src="download (2).png">
                  </div></div>
        <div class="home3">
           <div class="home4">
            <img src="pic10.jpeg">
            <div class="text"><a href="#"><h1>RWF 120,000,000</h1><p>Rwanda,gahanga</p></a></div> 
           </div>
           <div class="home4">
            <img src="pic2.webp">
            <div class="text"><a href="#"><h1>RWF 80,000,000</h1><p>Rwanda,nyakabanda</p></a></div> 
           </div> 
           <div class="home4">
            <img src="pic3.jpg">
            <div class="text"><a href="#"><h1>RWF 45,000,000</h1><p>Rwanda,kumidali</p></a></div> 
           </div> 
        </div>
        <div class="vhouse">
          <table><tr><td><video controls muted autoplay>
            <source src="tour2.mp4">
          </video><br><button id="submit1">book</button>
          <p>contact +250 785 363 467 for more details</p></td><td>         
             <video controls muted autoplay>
            <source src="tour1.mp4">
          </video><br>
          <button id="submit1">book</button>
          <p>contact +250 788 000 890 for more details</p></td></tr>
          </table>
        </div>
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
        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
        <li><a href="https://www.twitter.com/"><i class="fa-brands fa-x-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li></ul>
    </div></div>
     <div class="bottom-bar">
        <p>&copy;2023 Dream Property.All rights reserved</p>
     </div></footer>                            
</body></html>