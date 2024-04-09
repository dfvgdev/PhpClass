
<?php
session_start();

?>

<html>
<head><title>Query the Books Database 2</title><head>
<body>
        <h1>Query the Books Database</h1>
        <h3>Search for Title</h3>
        <p>Precede and follow the entry with % if not a complete title.</p>
        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Book Title: <input type="text" name="title" /></p>
            <p><input type="submit" name="submit" value="Submit" /></p>
        </form>
        <?php 
        $title = $_POST['title'];
        $title.trim((0));
        $conn = mysqli_connect("localhost", "root", "", "books_db", "3306");
        $query = "SELECT * FROM books_db WHERE title LIKE '$title'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['Title'];
                $author = $row['Author'];
                $Publisher = $row['Publisher'];
                $price = $row['Price'];
                $category = $row['Category'];







                echo "$title $author $Publisher $price $category<br>";
?> 

<h1>Change Value ? </h1>
<form name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Book Title: <input type="text" name="changetitle" /></p>
            <p><input type="submit" name="submit" value="Submit" /></p>
        </form>
        <?php 
        

        
        if ($_POST['submit_change']) {
            $changetitle = $_POST['changetitle'];
            $conn = mysqli_connect("localhost", "root", "", "books_db", "3306");
            $sql = "INSERT INTO books_db (title) VALUES ('$changetitle')";
            mysqli_query($conn, $sql);
            echo "Title changed successfully.";
        }
   



            }
        }





        ?>
</body>
</html>
