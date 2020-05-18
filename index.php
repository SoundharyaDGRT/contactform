<?php
$con = mysqli_connect("localhost", "root", "", "contact-form") or die(mysqli_error($con));

$name = $_POST['name'];
$registernumber = $_POST['registernumber'];
$department = $_POST['department'];
$year = $_POST['year'];
$email = $_POST['email'];
$message = $_POST['message'];

//database connection
$result_query = "insert into student(name,registernumber,department,year,email,message) values('$name','$registernumber','$department','$year','$email','$message')";
//die($result_query);
$result_submit = mysqli_query($con, $result_query) or die(mysqli_error($con));
echo "<script>alert('Succesfully Submitted!!');</script>";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact-form</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="contact-title">
        <h1>Hi</h1>
        <h2>Welcome</h2>
    </div>

    <div class="contact-form">

        <form id="contact-form" method="post">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="registernumber" type="number" class="form-control" placeholder="Register number" required>
            <br>
            <input name="department" type="text" class="form-control" placeholder="Department" required>
            <br>
            <input name="year" type="number" class="form-control" placeholder="Year" required>
            <br>


            <input name="email" type="text" class="form-control" placeholder="Your email" required>
            <br>
            <input name="message" type="text" class="form-control" placeholder="Message" required>

            <br>

            <input type="submit" class="form-control submit" value="SEND MESSAGE" required>
        </form>

    </div>

</body>

</html>