<?php
    $firstNum= $_POST["firstNum"];
    $operation= $_POST["operation"];
    $secondNum= $_POST["secondNum"];

    echo "<img src='calculator.jpg' width='300' height='300'><br>";

    if ($operation == "addition"){
        echo "<b> The " .$operation. " of number </b>" .$firstNum. "<b> and number </b>" .$secondNum. "<b> gives a result of: </b>" .($firstNum+$secondNum). "</b>";
    } else if ($operation == "subtraction"){
        echo "<b> The " .$operation. " from number </b>" .$firstNum. "<b> the number </b>" .$secondNum. "<b> gives a result of: </b>" .($firstNum-$secondNum). "</b>";
    } else if ($operation == "multiplication"){
        echo "<b> The " .$operation. " of number </b>" .$firstNum. "<b> with number </b>" .$secondNum. "<b> gives a result of: </b>" .($firstNum*$secondNum). "</b>";
    } else if ($operation == "division"){
        echo "<b> The " .$operation. " of number </b>" .$firstNum. "<b> by number </b>" .$secondNum. "<b> gives a result of: </b>" .($firstNum/$secondNum). "</b>";
    } else if ($operation == "modulus"){
        echo "<b> The " .$operation. " of number </b>" .$firstNum. "<b> and number </b>" .$secondNum. "<b> gives a result of: </b>" .($firstNum%$secondNum). "</b>";
    } else {
        echo "<b> Unexpected error has occured </b>";
    }

