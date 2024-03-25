

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Show car Records</title>
</head>
<body>
<?php
$carID = $_GET['cardId'];
$Model = $_GET['Model'];
$Make = $_GET['make'];
$image = $_GET['image'];

    $conn = mysqli_connect("localhost", "root", "", "car_rentals_db", "3306");
    $sql = "SELECT Date, Description, Cost FROM carmaintenance;";
    $result = mysqli_query($conn, $sql);
            echo "<br><br>";
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $date = $row['Date'];
                    $description = $row['Description'];
                    $cost = $row['Cost'];
                    
                    
                    ?>


 
            <?php
                }
            }
            ?>
           <div class="container">
    <div class="card row shadow-lg p-3 mb-5 bg-white rounded" >
    <div class="card-body">
        <img src="<?php echo $image; ?>" class="card-img-top"  alt="<?php echo "$make $model"; ?>">
            <h5 class="card-title">Maintenance Log</h5>
            <p class="card-text">Miantenance Log: <?php echo "$date"; ?></p>
            <p class="card-text">Miantenance log description: <?php echo "$description"; ?></p>
            <p class="card-text">Miantenance log cost: <?php echo "$cost"; ?></p>
            <p class ="card-text">Miantenance log cost: <?php echo "$cost"; ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>

        </div>

    </div>
</div>




</body>
</html>

