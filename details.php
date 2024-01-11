<!DOCTYPE html><html>
    <head><title>details</title>
      <style>
        .info{
          margin:5%;
          background-color: rgb(7, 7, 7);
          height:170vh;
          width:90%;
          box-shadow: 2px 2px 10px;
          border-radius:12px;
        }
        .info button{
          background-color: red;
          height: 40px;
          width: 12%;
          margin-top: 12%;
          border-radius: 12px;
          box-shadow: 2px 2px 12px;
          color: whitesmoke;
          font-size: 30px;
        }
        .info h1{
          color: whitesmoke;
          font-size: 50px;
          font-weight: 800;
        }
        .prod img{
              width: 100%;height: 400px;
        }
        .prod1 h1{
          color: red;
          font-size: 30px;
        }
        .prod1 p{
          font-weight: 800;
          color: whitesmoke;
        }
        .prod2{
          height: 500px;
          width: 45%;
          background-color: rgb(7, 18, 14);
          display: inline-block;
          float: left;
        }
        .prod3{
          height: 500px;
          width: 45%;
          background-color: rgb(7, 18, 14);
          float: right;
          display: inline-block;
        }
      </style>
    </head>
    <body>
  <div class="info">
    <h1>propert information</h1>
    <div class="prod">
        <img src="images/pic12.jpg">
    </div>
    <div class="prod1">
      <div class="prod2"><h1>location</h1>
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
  </div><button onclick="document.location='property.php'">back</button>
  <button onclick="document.location='booked.php'">book</button>
  </div> 
    </body>
</html>