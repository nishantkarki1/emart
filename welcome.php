<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping in Nepal</title>
    <style>
body {
  background-color: #ddd;
}

h1 {
  color: black;
  margin-left: 40px;
}
.button {
  border-radius: 25px;
  background-color: #5e8f95;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 10px;

}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
    <br><br><br><br><br><br>
    <center>
    <?php echo "<h1>Welcome to our website " . $_SESSION['username'] . "</h1>"; ?>
    <a href="emart.php"><button class="button"><span>Click Here! </span></button></a><br><br>
    <a href="logout.php"><button class="button"><span>Logout </span></button></a>
</body>
</html>