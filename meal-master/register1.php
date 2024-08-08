<?php

if (isset($_POST['username'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this database failed due to" .
            mysqli_connect_error());
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $m_no = $_POST['m_no'];
    $password = $_POST['pass'];
    $repass = $_POST['re_pass'];
    echo "Hi";
    $sql = "INSERT INTO `test db`.`user_detailes` (`username`, `email`, `m_no`,
            `password`) VALUES ('$username', '$email',
            '$m_no', '$password')";
    mysqli_query($con, $sql);


    $con->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Your home account</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <div class="container">
        <h1>Welcome to Meal management system</h1><br>
        <p>Enter your informations</p>

        <form action="register1.php" class="form" method="post" autocomplete="off" id="form">
            <input type="text" name="hidden" id="username" placeholder="Enter Your Home Username" required autocomplete="false">
            <input type="email" name="hidden" id="email" placeholder="Enter Your Email" required autocomplete="false">
            <input type="number" name="hidden" id="m_no" placeholder="Enter member number" required autocomplete="false">
            <input type="password" name="hidden" id="pass" placeholder="Enter a password" required autocomplete="new-password" onkeyup='btnn()'>
            <input type="password" name="hidden" id="re_pass" placeholder="Re-enter Your Password" onkeyup='btnn()' required autocomplete="false">
            <span id="error"></span>
            <input type="submit"  name="Submit" id="Submit" value="Done" id="btn">
            <!-- <button class="btn" id="btn" onclick="btn()">Next</button> -->
        </form>



    </div>
</body>
<!--Preventing resubmission on reload or back-->
<!-- <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script> -->


</html>

<script>
    function btnn() {
        event.preventDefault()
        console.log("hi")
        var pass = document.getElementById("pass").value;
        var re_pass = document.getElementById("re_pass").value;
        if (pass != re_pass) {
            document.getElementById("error").hidden = false;
            document.getElementById("error").innerHTML = "Password doesn't matching!";
            document.getElementById("error").style.color = "Red";
            document.getElementById("btn").disabled = true;
        } else {
            document.getElementById("error").hidden = true;
            document.getElementById("btn").disabled = false;
        }
    }
</script>