<!DOCTYPE html>
<html>
<head>
<title>Search Result Rentit</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
table {
padding-top:500px;
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
    <!-- navbar-->
		<nav>
			<div class="nav-wrapper grey darken-4">
			<a href="home.php" class="brand-logo"> Rentit</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
			</ul>
			</div>
		</nav>

    <table>
    <tr>
    <th>City</th>
    <th>Apartment</th>
    <th>Rent</th>
    <th>Tenent</th>
    <th>Furnishing</th>
    </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "shambhargu", "crud");
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $city = $_POST['city'];
        $sql = "SELECT city,apartment,rent,tenent,furnishing,address FROM data where city='$city'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["city"]. "</td><td>" . $row["apartment"]. "</td><td>". $row["rent"]. "</td><td>" . $row["tenent"]. "</td><td>" . $row["furnishing"]. "</td><td>" .$row["address"] ."</td></tr>";
        }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        ?>
    </table>
</body>
</html>