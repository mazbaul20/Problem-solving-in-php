<?php
    # Write your PHP code from here
    $strA = fgets(STDIN);
    $strA = trim($strA," \r\n");
    

    $strB = fgets(STDIN);
    $strB = trim($strB," \r\n");
    

    if(strlen($strA) != strlen($strB)){
        echo "NO";
    }

    $charCountA = array_count_values(str_split($strA));
    $charCountB = array_count_values(str_split($strB));

    echo ($charCountA == $charCountB) ? "YES" : "NO";
    
?>