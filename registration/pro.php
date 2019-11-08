<?php 
$servername = "localhost";
$username = "root";
$password = "shambhargu";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$city = $_POST['city'];
$apartment=$_POST['apartment'];
$rent=$_POST['rent'];
$tenent=$_POST['tenent'];
$furnishing = $_POST['furnishing'];
$address = $_POST['address'];



    if(isset($_POST['save'])){

    $sql = "INSERT INTO data ( city, apartment , rent , tenent , furnishing , address)
    VALUES ('$city','$apartment', '$rent','$tenent','$furnishing','$address');";


    if ($conn->query($sql) === TRUE) {
            echo "New records created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
    }


    if(isset($_POST['del'])){
        // $bookid = textboxValue("$name");
        $sql = "DELETE FROM data WHERE city='$city' and address='$address'";
        if ($conn->query($sql) === TRUE) {
                        echo "New records deleted successfully";
                            } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                            }
    }

    if (isset($_POST['update'])) {

        $sql = "UPDATE data SET rent='$rent', tenent='$tenent' WHERE city='$city' and address='$address'";
        if ($conn->query($sql) === TRUE) {
            $message = "updated data";
            echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
    }

 $conn->close();

  ?>
 