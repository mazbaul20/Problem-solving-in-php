<?php
    # Write your PHP code from here
    $imageWidth = fgets(STDIN);
    $imageWidth = trim($imageWidth," \r\n");

    $containerWidth = 1000;
    $remainingSpace = $containerWidth-$imageWidth;
    if($remainingSpace<=0){
        echo "0";
    }else{
        $leftMargin = $remainingSpace / 2;
        print $leftMargin."\n";
    }

?>