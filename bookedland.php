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
// Assuming you have established a database connection
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
           <li><a href="index.php">Home</a></li> 
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
        <div class="dashboard4">
    <?php
$query = "SELECT * FROM booked WHERE category = 'land'";
$result = mysqli_query($con, $query);

// Display the rows in a table inside a <div>
echo '<div>';
echo '<table>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Email</th>';
echo '<th>Telephone</th>';
echo '<th>Category</th>';
echo '<th>Status</th>';
echo '</tr>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['fname'] . '</td>';
    echo '<td>' . $row['lname'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['tel'] . '</td>';
    echo '<td>' . $row['category'] . '</td>';
    echo '<td>' . $row['status'] . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '</div>';
mysqli_close($con);
?></div></div><br><br>

</body></html>

