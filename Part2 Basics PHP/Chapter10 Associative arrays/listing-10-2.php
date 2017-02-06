<?php
    // Слияние списков при помощи оператора +
    $good = ["Julian Arahanda", "Matt Doran", "Belinda McClory"];
    $bad = ["Paul Goddard", "Robert Taylor"];
    $ugly = ["Clint Eastwood"];
    $all = $good + $bad + $ugly;
    print_r($all);
        // Выведется  Array ( [0] => Julian Arahanda [1] => Matt Doran [2] => Belinda McClory )
?>