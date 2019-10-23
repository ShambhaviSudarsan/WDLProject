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
     $sql = "DELETE FROM data WHERE city='$city'";
 if ($conn->query($sql) === TRUE) {
                 echo "New records deleted successfully";
                     } else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
 }
}


 $k=0;
 $i=0;
 if(isset($_POST['search'])){
 
     $result = mysqli_query($conn, "SELECT * FROM data
     WHERE city='$city'");
     echo "<table border  = 1>";
     echo "<table>";
     echo "<tr>";
     echo "<th>"; echo "city";  echo "</th>";
     echo "<th>"; echo "apartment";  echo "</th>";
     echo "<th>"; echo "rent";  echo "</th>";
     echo "<th>"; echo "tenent";  echo "</th>";
     echo "<th>"; echo "furnishing";  echo "</th>";
     echo "<th>"; echo "address";  echo "</th>";
     echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>"; echo $row['city'];  echo "</td>";
            echo "<td>"; echo $row['apartment'];  echo "</td>";
            echo "<td>"; echo $row['rent'];  echo "</td>";
            echo "<td>"; echo $row['tenent'];  echo "</td>";
            echo "<td>"; echo $row['furnishing'];  echo "</td>";
            echo "<td>"; echo $row['address'];  echo "</td>";
            echo "</tr>";
            $k = 1;
        }
     if ($k==0) {
         echo "Error: " ;
     }
     echo "</table>";
 }
 $conn->close();

  ?>
 