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
?>
<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $image; ?>" class="card-img-top"  alt="<?php echo "$Make $Model"; ?>">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="CarMaintence.php?cardId=<?php echo $carID; ?>&make=<?php echo $Make; ?>&Model=<?php echo $Model;?> &image=<?php echo $image;?>"class = "btn btn-primary"> View car </a>

        </div>
    </div>
    
</div>
</body>
</html>