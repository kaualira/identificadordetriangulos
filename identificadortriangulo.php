<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center"> É um Triangulo? </h1>
    <p align="center"> Vamos descobrir! <p>
    <form action='<?php $_SERVER["PHP_SELF"] ?>' method="post">
        
            <label for="ladoa">Lado A: </label>
            <input type="text" name="ladoa">
            <br><br>
            <label for="ladob">Lado B: </label>
            <input type="text" name="ladob">
            <br><br>
            <label for="ladoc">Lado C: </label>
            <input type="text" name="ladoc">
            <br><br>
            <input type="submit"> <input type="reset" value="reset">
    </form>

    <?php
        $ladoa = 0;
        $ladob = 0;
        $ladoc = 0;
        
        if (isset ($_POST["ladoa"])) {
            $ladoa = $_POST["ladoa"];
            $ladob = $_POST["ladob"];
            $ladoc = $_POST["ladoc"];
            echo "<h3> Valores informados </h3>";
            echo "<p> Lado A: $ladoa </p>";
            echo "<p> Lado B: $ladob </p>";
            echo "<p> Lado C: $ladoc </p>";
            if (($ladoa+$ladob>$ladoc)&&($ladoa+$ladoc>$ladob)&&($ladoc+$ladob>$ladoa)) {
                echo "<br><br>";
                echo "<h2> Os valores representam os lados de um triangulo! <h2>";
            }
            else {
                echo "<br><br>";
                echo "<h2> Os valores não representam os lados de um triangulo. <h2>";
            }
        }
    ?>
</body>
</html>