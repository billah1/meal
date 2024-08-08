<?php

// if (isset($_POST['username'])) {
//     $server = "localhost";
//     $username = "root";
//     $password = "";

//     $con = mysqli_connect($server, $username, $password);

//     if (!$con) {
//         die("connection to this database failed due to" .
//             mysqli_connect_error());
//     }

//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $m_no = $_POST['m_no'];
//     $password = $_POST['pass'];
//     $repass = $_POST['re_pass'];

//     if ($password == $repass) {
//         $sql = "INSERT INTO `test db`.`user_detailes` (`username`, `email`, `m_no`,
//             `password`) VALUES ('$username', '$email',
//             '$m_no', '$password')";
//         mysqli_query($con, $sql);
//     } else {
//         echo "<p>Password not matching</p>";
//     }


//     $con->close();
// }

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

        <form action="register.php" class="form" method="post" autocomplete="off" id="form">
            <input type="text" name="username" id="username" placeholder="Enter Your Home Username" required autocomplete="off">
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required autocomplete="off">
            <input type="number_format" name="m_no" id="m_no" placeholder="Enter member number" onkeyup='btn()' required autocomplete="off">
            <input type="password" name="pass" id="pass" placeholder="Enter a password" required autocomplete="off">
            <input type="password" name="re_pass" id="re_pass" placeholder="Re-enter Your Password" required autocomplete="off">
            
            <!-- <button type="submit" value="Next" id="btn" disabled>Done</button> -->
            <!-- <button class="btn" id="btn" onclick="btn()">Next</button> -->
        </form>
        <div>
            <form action="register.php" method="POST" id="member_details" hidden>

            </form>
        </div>

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
    function btn() {
        event.preventDefault()
        var numMembers = document.getElementById("m_no").value
        var form = document.getElementById("member_details")
        var form1 = document.getElementById("form")
        

        var user = document.getElementById("username");
        var email = document.getElementById("email");
        var m_no = document.getElementById("m_no");
        var pass = document.getElementById("pass");
        var re_pass = document.getElementById("re_pass");

        // form.append("username", user.value)
        // form.append("email", email.value)
        // form.append("m_no", m_no.value)
        // form.append("pass", pass.value)
        // form.append("re_pass", re_pass.value)

        //form.setAttribute("hidden", false);
        //document.getElementById("form").style.display = "none";

        // let button = document.createElement("button")
        // button.textContent = "Submit"
        // button.setAttribute("type", "submit")
        // form1.appendChild(button)


        for (let i = 0; i < numMembers; i++) {
            let input = document.createElement("input")
            input.setAttribute("name", "member" + i)
            input.setAttribute("placeholder", "Enter a member name")
            form1.append(input);
        }
        // if(user,email,m_no,pass,name != ''){
        //     document.getElementById("btn").disabled = false
        // }
        let button = document.createElement("button")
        button.textContent = "Submit"
        button.setAttribute("type", "submit")
        form1.appendChild(button)





















        // console.log("hi")


        // if(pass != re_pass){
        //    document.getElementById("label").innerHTML = "Pss"; 
        //    console.log("aa")
        // }

        //var flag = 1;

        // if (user.value == '') {
        //     flag += flag;
        // }
        // if (email.value == '') {
        //     flag += flag;
        // }
        // if (m_no.value == '') {
        //     flag += flag;
        // }
        // if (pass.value == '') {
        //     flag += flag;
        // }
        // if (re_pass.value == '') {
        //     //flag += flag;
        // }
        // if (re_pass.value != pass.value) {
        //     //flag += flag;
        // }
        // if (flag == 1) {

        // }


    }
</script>