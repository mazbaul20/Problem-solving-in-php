<?php
    # Write your PHP code from here

    fscanf(STDIN,"%d",$n);
    $array = fgets(STDIN);
    $array = trim($array," \r\n");
    $array = explode(" ",$array);

    sort($array);

    $minNonNegative = 0;

    foreach ($array as $value) {
        if ($value <= $minNonNegative) {
            $minNonNegative = max($minNonNegative, $value + 1);
        }
    }

    echo $minNonNegative . "\n";
?>