<?php

    $a = 9;
    $b = "9";

    echo "($a <= $b) && ($a >= $b) : " . (($a <= $b) && ($a >= $b));
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "($a <= $b) && ($a >= $b) && ($a === $b)  : " . (($a <= $b) && ($a >= $b) && ($a === $b));
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "($a <= $b) or ($a != $b) or ($a === $b)  : " . (($a <= $b) or ($a != $b) or ($a === $b));
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "($a != $b) or ($a === $b)  : " . (($a != $b) or ($a === $b));
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "($a <= $b) xor ($a >= $b) xor ($a == $b) : " . (($a <= $b) xor ($a >= $b) xor ($a == $b));
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "($a <= $b) xor ($a >= $b) : " . (($a <= $b) xor ($a >= $b));
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "($a <= $b) xor ($a >= $b) xor ($a == $b) xor ($a == $b)  : " . (($a <= $b) xor ($a >= $b) xor ($a == $b) xor ($a == $b));
    echo "<br>";
    echo "<br>";
    echo "<br>";

?>