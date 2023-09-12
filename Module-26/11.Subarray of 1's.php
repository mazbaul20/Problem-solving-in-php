<?php
    # Write your PHP code from here
    fscanf(STDIN,"%d",$N);
    
    $line = fgets(STDIN);
    $line = trim($line," \r\n");
    $arr = explode(" ",$line);

    $max_length = 0;
    $current_length = 0;

    for ($i = 0; $i < $N; $i++) {
        if ($arr[$i] == 1) {
            $current_length++;
        } else {
            $max_length = max($max_length, $current_length);
            $current_length = 0;
        }
    }

    $max_length = max($max_length, $current_length);

    echo $max_length."\n";

?>