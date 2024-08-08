<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Management System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" id="myDIV">
        <h1>Welcome to Meal Management System</h1>
        <p>Post your daily bazar list and enjoy a proper meal management system</p>

        <a class="one active" href="index.php">Home</a>
        <a class="one" href="detailes.php">All detailes</a>
        <a class="one" href="rqst_meal1.php">Request meal</a>
        <a class="one" href="#about">About</a>
    </div>


    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var nav = header.getElementsByClassName("one");
        for (var i = 0; i < nav.length; i++) {
            nav[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>


    <div class="container1">
        <form action="index.php" method="post" class="form">
            <input type="text" name="name" id="name" placeholder="Enter your name ">
            <textarea name="b_list" id="b_list" cols="30" rows="10" placeholder="Enter Bazar Lists with Amount(Example : chicken = 250)"></textarea>

            <input type="submit" name="btn1" class="btn1" value="Submit" />

        </form>



        <?php

        if (array_key_exists('btn1', $_POST)) {
            //Collect post variables
            $name = $_POST['name'];
            $b_list = $_POST['b_list'];
            if (isset($_POST['b_list'])) {

                if ($_POST['b_list'] == "") {
                    echo "<p>You need to fill the forms</p>";
                } else {
                    echo "<p class='sub_name'>Your name: $name</p><br>";
                    echo "<p class='sub_b_list'>Bazar Description: $b_list</p><br>";
                    //Calculating total amount
                    preg_match_all('!\d+\.*\d*!', $b_list, $matches);
                    echo "<p class='total_amount'>The Total amount is : </p";
                    $total = 0;
                    foreach ($matches[0] as $price) {
                        $total += $price;
                    }
                    echo "<h4>$total</h4>";






                    //Set connection variables
                    $server = "localhost";
                    $username = "root";
                    $password = "";


                    //Create a database connection
                    $con = mysqli_connect($server, $username, $password);

                    //Check for connection success
                    if (!$con) {
                        die("connection to this database failed due to" .
                            mysqli_connect_error());
                    } else {
                    }

                    //Execute Query
                    $sql = "INSERT INTO `meal`.`blist` (`name`, `b_list`, `total`, `date`) VALUES ('$name', '$b_list',
                            '$total',curdate());";
                    mysqli_query($con, $sql);
                    echo "<p>Successfully Posted. Thank you.</p>";
                    //Close the database connection
                    $con->close();
                }
            }
        }




        ?>
        <!--Preventing resubmission on reload or back-->
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>








    </div>
</body>

</html>