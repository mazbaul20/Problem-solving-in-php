<?php
    # Write your PHP code from here
    
    function isFunny($s){
        $length = strlen($s);

        for ($i = 0; $i < $length; $i++) {
            if (($i % 2 == 1 && ctype_lower($s[$i])) || ($i % 2 == 0 && ctype_upper($s[$i]))) {
                return "No";
            }
        }

        return "Yes";
    }

    $input = fgets(STDIN);
    $input = trim($input," \r\n");

    $result = isFunny($input);
    echo $result."\n";
?>