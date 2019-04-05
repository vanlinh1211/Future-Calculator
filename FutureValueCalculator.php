<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input[type = text] {
        font-size: 16px;
        border: 2px solid #8E9CB2;
        border-radius: 2px;
        padding: 2px 2px;
    }
    #tab{
        background-color: #8E9CB2;
        margin-right: auto;
    }


</style>
<body>
<table id="tab">
    <h1>Future Value Calculator</h1>
    <form method="post">
        <tr>
            <td>Inventment Amount:<input type="text" name="valueAmount"/></td>
        </tr>
        <br>
        <tr>
            <td>Yearly Interest Rate:<input type="text" name="valueInterest"/></td>
        </tr>
        <br>
        <tr>
            <td>Number of Years:<input type="text" name="valueYears"></td>
        </tr>
        <input type="submit" value="Tính toán" id="calculator"/>
    </form>
</table>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $amount = $_POST["valueAmount"];
    $interest = $_POST["valueInterest"];
    $numberYear = $_POST["valueYears"];

    echo $amount . "<br>";
    for ($index = 1; $index <= $numberYear; $index ++){
        $amount += $amount * ($interest/100);
        $future = $amount;
    }
    echo $interest . "<br>";
    echo $numberYear . "<br>";
    echo $future;
}
?>
</body>
</html>
