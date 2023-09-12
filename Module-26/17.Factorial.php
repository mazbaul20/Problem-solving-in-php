<?php
    # Write your PHP code from here
    function factorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    fscanf(STDIN,"%d",$n);

    $result = factorial($n);
    echo $result."\n";
?>