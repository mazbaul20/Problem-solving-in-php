<?php
    # Write your PHP code from here
    function fibonacci($n) {
        $fib = array(0, 1);

        for ($i = 2; $i <= $n; $i++) {
            $fib[$i] = ($fib[$i - 1] + $fib[$i - 2]) % 1000000007;
        }

        return $fib[$n];
    }

    $n = intval(fgets(STDIN));

    $result = fibonacci($n);

    echo $result . "\n";
?>