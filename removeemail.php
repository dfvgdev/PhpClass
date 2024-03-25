<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $email = $_POST["email"];
$conn = mysqli_connect("localhost","root","", "wines_db", "3306");



$sql = "DELETE FROM tbl_email_list WHERE email='$email'";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
?>
    

    <?php echo $email ?>
</body>
</html>