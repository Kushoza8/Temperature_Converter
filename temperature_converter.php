<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>

<body>
    <h2>THIS IS A TEMPERATURE CONVERTER</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="center1">
        <br>
        &nbsp;<label>Enter the temperature SI Unit: </label>
        <select name="temp_type">
            <option value="celsius">Degree Celsius</option>
            <option value="fahren">Degree Fahrenheit</option>
        </select>
        <br><br>
        &nbsp;<label>Enter the temperature value: </label>
        &nbsp;&nbsp;
        <input type="text" name="temp">&nbsp;
        <br><br>
        &nbsp;<label>See the answer here:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" placeholder="answer will show here" id="answer" readonly>
        <br><br>
        <div id="center">
            <input type="submit" name="submit" value="Submit">&nbsp;
        </div>
        <br>
    </form>
</body>

</html>
<style>
    #center {
        display: flex;
        justify-content: center;
    }

    #center1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: solid;
        background-color: orange;
    }

    body {
        background-color: yellowgreen;
    }

    h2 {
        text-align: center;
        position: relative;
        top: 180px;
    }
</style>
<?php
error_reporting(0);
if (isset($_POST["submit"])) {
    if (isset($_POST["temp_type"]) && isset($_POST["temp"])) {
        $temp_type = $_POST["temp_type"];
        $temp_value = $_POST["temp"];

        if ($temp_type == "celsius") {
            $degree_ans = ($temp_value * 9 / 5) + 32;
            echo "<script>document.getElementById('answer').value = '{$degree_ans}';</script>";
        } else {
            $degree_ans = ($temp_value - 32) * 5 / 9;
            echo "<script>document.getElementById('answer').value = '{$degree_ans}';</script>";
        }
    }
}
?>
