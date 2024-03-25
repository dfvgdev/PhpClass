<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$surname = $_POST["lastname"];
$conn = mysqli_connect("localhost","root","", "wines_db", "3306");

$sql = "INSERT INTO tbl_email_list (firstname, lastname, email)
VALUES ('$name', '$surname', '$email')";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


?>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"];
?>
<BR></BR>
last name is <?php echo $_POST["lastname"]?>
</body>
</html>