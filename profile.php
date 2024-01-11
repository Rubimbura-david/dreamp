<!DOCTYPE html><html>
    <head><title>profile</title>
    <style>
        .profile1{
            height: 720px;
            width: 50%;
            background-image: linear-gradient(#033747,#012733);
            margin-top: 2%;
            border-radius: 12px;
            box-shadow: 2px 2px 7px;
        }
        .profile h1{
            color: white;
            font-size: 60px;
            font-weight:1200;
        }
        .profile2{
            height: 600px;
            width: 50%;
            margin-left: 50%;
            margin-top: -40%;
        }
        .profile2 img{
            margin-left: 7%;
            height: 600px;
            width: 70%;
        }
        .profile1 p{
            font-size:30px;
            color:white;
            font-weight:700;
        }
        .profile1 i{
            color:white;
            font-size:30px;
        }
      .profile i:hover{
        color:red;
      }
      #submit1{
    padding: 10px 20px;
    margin-top: 2%;
    width: 20%;
    background-color: black;
    color: whitesmoke;
    font-size: 20px;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    margin: auto;
}
#submit1:hover{
    background-color:#4286f4;
}
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
</head>
</html><body>
    <div class="profile">
        <div class="profile1">
        <h1>Your personal information</h1>
    <form>
       <p>USERNAME</p>
       <i class="fa-regular fa-pen-to-square"></i>
<p>EMAIL</p>
<i class="fa-regular fa-pen-to-square"></i>
<p>DATE OF BIRTH</p>
<i class="fa-regular fa-pen-to-square"></i>
<p>LOCATION</p>
<i class="fa-regular fa-pen-to-square"></i><br><br>
<button id="submit1" name="submit">save</button>
        </div>
        <div class="profile2">
            <img src="images\profile.gif">
        </div>
    </div>
</body></html>