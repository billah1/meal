<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request meal</title>
    <link rel="stylesheet" href="rqst.css">
</head>

<body>
    <div class="container">
        <h2>Here you can Request meal number for the next day</h2>

        <a class="one" href="index.php">Home</a>
        <a class="one" href="detailes.php">All detailes</a>
        <a class="one active" href="rqst_meal.php">Request meal</a>
        <a class="one" href="#about">About</a>

    </div>
    <div class="container1">
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
                mysqli_conncet_error());
        } else {
            //echo "success";
        }

        $date = date('Y-m-d', strtotime("+1 day"));


        echo "<h3>Please Enter your desire meal number for: $date</h3>";



        $str = array("Emon", "Sharif", "Ragib", "Mofael", "Shuvo", "Maruf");
        $m_no = count($str);



        for ($i = 0; $i < $m_no; $i++) {
            echo $str[$i] . "'s meal :";
        ?>

            <input type="number" name="ml.$i" id="ml.$i">
        <?php
            if (isset($value)) {
                $value = $_POST['ml'];
                $newArray[$i] = $ml[$value];
                echo $newArray;
            }

            //$sql = "INSERT INTO `test db`.`meal` (`name`, `meal`, `date`) VALUES ('$str[$i]', '$_POST['ml']', curdate());";



        }

        ?>
        <input type="submit" name="btn1" class="btn1" value="Submit" />



        <?php


        echo "EMon";
        for ($i = 0; $i < $m_no; $i++) {
            $sql = "INSERT INTO `test db`.`meal` (`name`, `meal`, `date`) VALUES ('$str[$i], '$newArray[$i]', curdate());";
            mysqli_query($con, $sql);
        }


        $con->close();

        ?>

    </div>
</body>

</html>