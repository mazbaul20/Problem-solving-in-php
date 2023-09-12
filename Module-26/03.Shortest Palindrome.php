<?php
    # Write your PHP code from here
    function shortestPalindrome($s) {
        $rev_s = strrev($s);
        $len = strlen($s);

        for ($i = 0; $i < $len; $i++) {
            if (substr($s, 0, $len - $i) == substr($rev_s, $i)) {
                return $rev_s . substr($s, $len - $i);
            }
        }

        return $s;
    }

    $input = fgets(STDIN);
    $input = trim($input," \r\n");

    $result = shortestPalindrome($input);
    echo $result."\n";
?>