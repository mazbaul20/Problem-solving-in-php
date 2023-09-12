<?php
    # Write your PHP code from here

    fscanf(STDIN,"%d %d",$n,$m);

    $arr1 = fgets(STDIN);
    $arr1 = trim($arr1," \r\n");

    $arr1 = explode(" ",$arr1);

    $arr2 = fgets(STDIN);
    $arr2 = trim($arr2," \r\n");
    $arr2 = explode(" ",$arr2);

    $intersection = array_intersect($arr1, $arr2);
    
    $intersection = array_unique($intersection);

    sort($intersection);

    echo count($intersection)."\n";

    echo implode(" ",$intersection)."\n";

?>