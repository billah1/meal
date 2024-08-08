<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All meal detailes</title>
    <link rel="stylesheet" href="detailes.css">
</head>

<body>
    <div class="container">
        <h2>This Table shows all meal detailes</h2>

        <a class="one" href="index.php">Home</a>
        <a class="one active" href="detailes.php">All detailes</a>
        <a class="one" href="rqst_meal1.php">Request meal</a>
        <a class="one" href="#about">About</a>
    </div>

    <?php
    $server = "localhost";
    $username = "root";
    $password = "";

    //$database = 'meal';


    //Create a database connection
    $con = mysqli_connect($server, $username, $password);

    //Check for connection success
    if (!$con) {
        die("connection to this database failed due to" .
            mysqli_connect_error());
    } else {
        //echo "success";
    }
    $sql = ("SELECT * FROM meal.blist ");
    $result = $con->query($sql);

    $con->close();
    ?>
    <table>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Bazar list</th>
            <th>Total amount</th>
            <th>Date</th>
        </tr>
        <?php
        while ($rows = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $rows['sl no']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['b_list']; ?></td>
                <td><?php echo $rows['total']; ?></td>
                <td><?php echo $rows['date']; ?></td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>