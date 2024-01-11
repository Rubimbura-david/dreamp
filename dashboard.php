<?php include("config.php"); ?>
<?php
    $query = "SELECT COUNT(*) AS total FROM uploaded";
    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $totalCount = $row['total'];
    } else {
        $totalCount = 0;
    }
    $query = "SELECT idupload FROM uploaded ORDER BY idupload DESC LIMIT 1";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $lastId = $row['idupload'];
} else {
    $lastId = 0;
}
$query = "SELECT COUNT(*) AS count FROM property.booked WHERE category = 'land'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$count1 = $row['count'];
?><?php
$query = "SELECT COUNT(*) AS count FROM property.booked WHERE category = 'house'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
?>
<!DOCTYPE html><html><head><title>page2</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav>
            <div class="logo">
       <p>DREAM P</p>
            </div>
            <ul>
           <li><a href="index.html">Home</a></li> 
          <li><a href="property.php">property</a></li>
          <li><a href="contact.php">contact us</a></li>
            <li><a href="about.php">about us</a></li></ul>
        </nav>
        <div class="dashboard">
    <div class="dashboard1">
        <p>Uploded Files</p>
        <p><?php echo $lastId; ?></p>
    </div>
    <div class="dashboard1">
        <p>booked Land</p>
        <p><?php echo $count1; ?></p>
    </div>
    <div class="dashboard1">
        <p>booked House</p>
        <p><?php echo $count; ?></p>
    </div>
    <div class="dashboard1">
        <p>available properties</p>
        <p><?php echo $totalCount; ?></p>
    </div>
</div>
    <div class="design1"><div class="design10">
    <a href="upload.php">
  <div class="design11">upload</div>
</a>
<a href="uploadedfiles.php"><div class="design11">available property</div></a>
        <a href="bookedland.php"><div class="design11">booked land</div></a>
        <a href="bookedhouse.php"><div class="design11">booked house</div></a>
        <a href="message.php"><div class="design11">message</div></a></div>
        <div class="design12">
        <div class="dash">
        <?php
if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $cell = $_POST['cell'];
    $village = $_POST['village'];
    $value = $_POST['value'];

    $file = $_FILES['file'];
    $filename = $file['name'];
    $filetmp = $file['tmp_name'];
    $filepath = "images/" . $filename;
    move_uploaded_file($filetmp, $filepath);
    $query = "INSERT INTO uploaded (category, province, district, sector, cell, village, value, file) 
              VALUES ('$category', '$province', '$district', '$sector', '$cell', '$village', '$value', '$filepath')";
    $result=mysqli_query($con, $query);
    echo "File uploaded and data inserted successfully.";
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h1>Uploading files from your device</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" class="upload" multiple required>
        <select class="select" name="category" required>
            <option value="land">Land</option>
            <option value="house">House</option>
        </select>
        Category<br>
        <input type="text" placeholder="province" class="place" name="province" required>
        <input type="text" placeholder="district" class="place" name="district" required>
        <input type="text" placeholder="sector" class="place" name="sector" required>
        <input type="text" placeholder="cell" class="place" name="cell" required>
        <input type="text" placeholder="village" class="place" name="village" required>
        <input type="text" placeholder="value Rwf" class="place" name="value" required><br>
        <div class="butto">
            <button type="submit" name="submit">Send</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>