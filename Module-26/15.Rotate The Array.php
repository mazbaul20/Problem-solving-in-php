<?php
    # Write your PHP code from here
    fscanf(STDIN,"%d %d",$n,$k);
    // printf("%d %d \n",$n,$k);
    $line = fgets(STDIN);
    $line = trim($line," \r\n");
    $arr = explode(' ',$line);
    
    if ($k == 0) {
        $lastElement = array_pop($arr);
        array_unshift($arr, $lastElement);
    } elseif ($k == 1) {
        $firstElement = array_shift($arr);
        array_push($arr, $firstElement);
    }
    echo implode(' ',$arr);
?>