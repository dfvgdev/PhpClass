<?php
session_start();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Show cars</title>
</head>
<body>
    <div class="containers">
    <?php
    //connection
    $coon = mysqli_connect("localhost","root","", "car_rentals_db", "3306");
    //sql query
    $sql = "SELECT * FROM cars;";
    $sql1 = "SELECT * FROM employees;";



    //run the query on the server
    $result = mysqli_query($coon, $sql);
    $result1 = mysqli_query($coon, $sql1);

    //check if the query was successfull
    echo"<br><br>";

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $carID = $row['CarID'];
            $Model = $row['Model'];
            $status = $row['Status'];
            $year = $row['Year'];
            $Make = $row['Make'];
            $LicensePlate = $row['LicensePlate'];
            $image = $row['Image'];

            echo "$carID $status $year $Make $LicensePlate $Model $image <br>";

        
            ?>

<div class="card row " style="width: 18rem; ">
    <img class="card-img-top" src= "<?php echo $image; ?>" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title flex-box justify-content-between">
    <?php echo $Model; ?>
    <a href = "editCar.php?carId= <?php echo "Edit" ?>" class = "badge bg-warning rounded-pill">Edit</a>
  </h5>
    <p class="card-text">Statues: <?php echo $status; ?> Year:  <?php echo $year; ?>, Make: <?php echo $Make; ?></p>
    <a href="CarRecords.php?cardId=<?php echo $carID; ?>&make=<?php echo $Make; ?>&Model=<?php echo $Model;?> &image=<?php echo $image;?>"class = "btn btn-primary"> View car </a>
  </div
          


           
<?php         
}
             }   
    ?>


</div>
</body>
</html>
    

