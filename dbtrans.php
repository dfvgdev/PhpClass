<?php
//this function connects to the DB
    function connectToDB() {
        $conn = mysqli_connect("localhost","root","", "car_rentals_db", "3306"); //3307 only if apache is on a different port rather than 80

        return $conn;
    }
    //get all cars
    function getAllCars($conn) {
        //SQL query 2
        $sql = "SELECT * FROM cars;";

        //run the query on the server 3
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function GetLogsPerCar($conn, $carId) {

        $sql = "SELECT Date,Description,Cost FROM carmaintenance A INNER JOIN cars B ON A.CarID_FK = B.CarID AND B.CarID = $carId;";
        //run on db server
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    Function insertLog($conn, $carId, $date, $description, $cost) {

        $sql = "INSERT INTO carmaintenance' ( 'CarID_FK', 'Date', 'Description', 'Cost') VALUES ('$carId', '$date', '$description', '$cost');";

        //Run on DB server
        $result = mysqli_query($conn, $sql);

        return $result;
    }

    function getCarInfo($conn, $carId){
        $sql = "SELECT * from cars Where CarID = $carId";
        $result = mysqli_query($conn, $sql);

        return $result;
    }
?>