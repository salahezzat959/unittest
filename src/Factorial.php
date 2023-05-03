<?php
class Factorial {
public function fact($n){ 
    $f = 1;
    
    if (!is_int($n) || $n < 0) {
            return null;
        }
    for ($i=1; $i <= $n; $i++) {  
    $f *= $i;  
    } 
    return $f;
    }

}

?>