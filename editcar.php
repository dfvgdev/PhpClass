


<head>

<body>

<?php
include "dbtrans.php";
$CarId = $_GET['carId'];
$conn = connectToDB();
$result = getCarInfo($conn,$CarId);


if($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION["CarID"] = $row['CarID'];
    $_SESSION["Make"] = $row['Make'];
    $_SESSION["Model"] = $row['Model'];
    $_SESSION["Image"] = $row['Image'];
    $_SESSION["Year"] = $row['Year'];
    $_SESSION["LicensePlate"] = $row['LicensePlate'];
    $_SESSION["Status"] = $row['Status'];

    
}
?>
</body>
</html>