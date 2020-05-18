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

    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <table class="table dataTable my-0" id="courses">
            <thead>
                <th> S. No. </th>
                <th> Name </th>
                <th> Register Number </th>
                <th> Department </th>
                <th> Year </th>
                <th> Email Address </th>
                <th> Message </th>
            </thead>
            <tbody>
            <?php
                $con = mysqli_connect("localhost", "root", "", "contact-form") or die(mysqli_error($con));

                $sel_query = "SELECT * FROM student";
                $result = mysqli_query($con, $sel_query);
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="text-center">
                <td><?php echo $count ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["registernumber"]; ?></td>
                <td><?php echo $row["department"]; ?></td>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["message"]; ?></td>
            </tr>
            <?php $count++; } ?>
            </tbody>
        </table>
    </div>
</body>
</html>