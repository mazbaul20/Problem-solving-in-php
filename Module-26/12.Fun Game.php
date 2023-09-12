<?php
    # Write your PHP code from here
    fscanf(STDIN,"%d",$N);
    $line = fgets(STDIN);
    $line = trim($line," \r\n");
    $arr = explode(" ",$line);

    $friend1_score = 0;
    $friend2_score = 0;

    $current_player = 1;

    $start = 0;
    $end = $N - 1;

    while ($start <= $end) {
        if ($current_player == 1) {
            $friend1_score += $arr[$start];
            $start++;
        } else {
            $friend2_score += $arr[$end];
            $end--;
        }
        
        $current_player = 3 - $current_player;
    }

    if ($friend1_score > $friend2_score) {
        echo "1";
    } elseif ($friend2_score > $friend1_score) {
        echo "2";
    } else {
        echo "3";
    }
?>