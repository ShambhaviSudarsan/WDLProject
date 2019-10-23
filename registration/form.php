
<!DOCTYPE html>
<html>
<head>
    <title>ho</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>

    <!-- form -->
    <center>
    <div class="container">
        <form action="pro.php" method="POST" class="form-horizontal">
            <label>City</label>
            <input type="text" name="city" placeholder="enter city"><br>
            <label>Apartment type</label>
            <input type="number" name="apartment" placeholder="enter BHK"><br>
            <label>Rent</label>
            <input type="number"  name="rent" placeholder="Rent amount(in rs)"><br>
            <label>Tenents</label>
            <input type="text"  name="tenent" placeholder="family/bachelors/company"><br>
            <label>Furnishing</label>
            <input type="text"  name="furnishing" placeholder="full/semi/no"><br>
            <label>Address</label>
            <input type="text"  name="address" placeholder="Address"><br>
            <button type="submit" name="save">Submit</button>
            <button type="submit" name="del">Delete</button>
        </form>
    </div>
    </center>
    

</body>