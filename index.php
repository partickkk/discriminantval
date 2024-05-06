

<?php
   if (empty($_POST["first_number"]) || empty($_POST["second_number"]) || empty($_POST["third_number"])) {
        echo"<br>Input a number";
    } else {
        if (is_numeric($_POST["first_number"]) && is_numeric($_POST["second_number"]) && is_numeric($_POST["third_number"])) {
            $a = ($_POST["first_number"]);
            $b = ($_POST["second_number"]);
            $c = ($_POST["third_number"]);
            $answer = ($b ** 2) - (4 * $a * $c);
            echo"<br> Discriminant Value: {$answer}";
    } else {
        echo "<br>Invalid Input";
    }}
?>