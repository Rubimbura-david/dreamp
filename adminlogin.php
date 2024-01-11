<!DOCTYPE html>
<html>
<head>
    <title>demo</title>
    <link rel="stylesheet" type="text/css" href="alogin.css">
</head>
<body>
    <div class="p1">
        <nav>
            <div class="logo">
                <p>DREAM P</p>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li> 
                <li><a href="property.php">property</a></li>
                <li><a href="contact.php">contact us</a></li>
                <li><a href="about.php">about us</a></li>
            </ul>          
        </nav>
        <div class="p2"> 
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM adminlogin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
$conn->close();
?>                    
<form action="adminlogin.php" method="post">    
            <h1>Admin Login</h1>
            <?php if (isset($error_message)): ?>
                <p><?php echo $error_message; ?></p>
            <?php endif; ?>
            <input type="text" class="label" placeholder="username" name="username">
            <input type="password" class="label" placeholder="password" name="password">
            <p><a href="#">forget your password?</a></p>
            <p><input type="checkbox" name="checkbox">Remember me</p>
            <p><button type="submit" name="submit">Login</button>
            </p>
            </p>
        </form>
    </div>
</div>
</body>
</html>

