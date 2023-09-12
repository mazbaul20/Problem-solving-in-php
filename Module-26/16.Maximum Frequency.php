<?php
    # Write your PHP code from here
    $input = fgets(STDIN);
    $input = trim($input," \r\n");

    $charCount = array();

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        if (isset($charCount[$char])) {
            $charCount[$char]++;
        } else {
            $charCount[$char] = 1;
        }
    }

    $maxCount = 0;
    $maxChar = '';

    foreach ($charCount as $char => $count) {
        if ($count > $maxCount || ($count == $maxCount && $char < $maxChar)) {
            $maxCount = $count;
            $maxChar = $char;
        }
    }

    echo $maxChar." ".$maxCount;
?>