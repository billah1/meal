<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Here you can Request meal number for the next day</title>
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

        //getting current date + 1 day
        $date = date('Y-m-d', strtotime("+1 day"));
        echo "<h3>Please Enter your desire meal number for: $date</h3>";

        $str = array("Emon", "Sharif");
        $m_no = count($str);
        ?>

        <form action="rqst_meal1.php" method='POST'>
            <?php
            for ($i = 0; $i < $m_no; $i++) {
                echo $str[$i] . "'s meal :";
                $name = $str[$i];
            ?>
                <input type="number" name="<?php echo $name; ?>" id="<?php echo $name; ?>">


            <?php
                $arr[$i] = $name;
            }
            ?>
            <input type="submit" name="btn1" class="btn1" value="Submit" />
        </form>




    </div>
    <?php

    if (array_key_exists('btn1', $_POST)) {

        //echo $_SERVER['REQUEST_METHOD'];
        if ($_SERVER['REQUEST_METHOD']) {
            for ($i = 0; $i < $m_no; $i++) {

                $meal[$i] = $_POST[$arr[$i]];
            }
        }




        for ($i = 0; $i < $m_no; $i++) {
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
            }

            $sql = "INSERT INTO `test db`.`meal` (`name`, `meal`, `date`) VALUES ('$str[$i]', '$meal[$i]',
                 '$date');";
            mysqli_query($con, $sql);

            $con->close();
        }
    }
    ?>

    <!--Preventing resubmission on reload or back-->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>


</body>

</html>