<?php
    # Write your PHP code from here
    fscanf(STDIN,"%s",$s);
    // printf("%s",$s);
    $rev = strrev($s);
    if($rev==$s){
        echo "YES";
    }else{
        echo"NO";
    }
?>