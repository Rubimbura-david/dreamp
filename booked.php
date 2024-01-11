<?php include("config.php");?>
<!DOCTYPE html><html>
<head>
    <title></title><link rel="stylesheet" type="text/css" href="demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
</script>

    <style>
      .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: ghostwhite;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      max-width: 400px;
    }
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor:pointer;
      }
      #myButton {
      display: inline-block;
      position: relative;
      cursor: pointer;
      transition: transform 0.3s;
      margin-left: 20%;
    }

    #myButton img {
      width: 100%;
      height: 200px;
    }

    #myButton:hover {
      transform: translateY(-5px);
    }
    </style>
</head>
<body><div class="boo">
  <div class="book">
  <?php
if(isset($_POST['submit'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $category=$_POST['choice1'];
    $status=$_POST['choice'];
    $query= "INSERT INTO booked(fname,lname,email,tel,category,status) VALUES('$firstname', '$lastname', '$email','$tel','$category','$status')";
    $results = mysqli_query($con,$query);
    if(!$results){
    die("Not inserted".mysqli_error($con));
}
   echo "Recorded successfully";
}
        ?>
    <h1>Fill your information</h1>
    <div class="book2">
    <form action="" method="post">
      <input type="text" name="fname" placeholder="full names"  class="book1" required>
      <input type="text" name="lname" placeholder="National ID"  class="book1" required>
      <input type="email"  name="email" placeholder="email"  class="book1" required>
      <input type="number"  name="tel" placeholder="phone number" class="book1" required>
      <select name="choice1" class="book1" id="cat"><option>land</option>
      <option>house</option></select>
      <select name="choice" placeholder="negotiate or accept the price provided" class="book1"><option>accept the price provided</option>
    <option>negotiate on the price provided</option></select>
    <button type="submit" name="submit">save</button></form></div></div>
    <div class="info">
    <h1>property information</h1>
    <div class="prod">
        <img src="images/pic12.jpg">
    </div>
    <div class="prod1">
      <div class="prod2">
        <h1>location</h1>
        <p>country:</p>
        <p>province:</p>
        <p>district:</p>
        <p>sector:</p>
        <p>cell</p>
        <p>village</p>
        <h1>maps</h1>
        <p>latitude</p><p>longitude</p></div>
      <div class="prod3"><h1>capacity</h1>
        <p>size:</p>
        <p>rooms:</p><h1>value of the property</h1>
        <p>RWF:</p>
        <h1>owner of the property contact</h1>
        <p>tel:0788346753</p>
        <p>email:karoli@gmail.com</p>
    </div>
  </div>
  </div> </div>
  </script>
</body>
</html>