<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="test.php" method="post">
            <label for="num">Enter member number: </label>
            <input type="number" name="number" id="number">
            <input type="submit" name="btn1" class="btn1" value="Submit" />
        </form>
    </div>

    <script>
        var numberInput = document.getElementById('number');
        var serverInputContainer = document.getElementById('container');

        numberInput.onchange = function() {
            var inputs = '';
            for (var i = 0; i < parseInt(numberInput.value); ++i) {
                inputs = inputs + '<input type="text" name="server_name_' + i + '"/><br/>';
            }
            serverInputContainer.innerHTML = inputs;
        };
    </script>




</body>

</html>