<?php
    # Write your PHP code from here
    fscanf(STDIN,"%d",$n);
    $line = fgets(STDIN);
    $line = trim($line," \r\n");
    $arr = explode(" ",$line);

    sort($arr);

    $result = $arr[$n / 2];
    echo $result;
    
?>