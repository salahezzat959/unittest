<?php
use PHPUnit\Framework\TestCase;
require './src/Factorial.php';

class FactorialTest extends TestCase
{
    public function testfact()
    {
        $a = new Factorial;
        $res1 = $a->fact(0);
        $res2 = $a->fact(1);
        $res3 = $a->fact(5);
        $n = random_int (3,1000);
        $res4 = $a->fact($n);
        $res5 = $a->fact(-3);
        $res6 = $a->fact(1.5);
        $res7 = $a->fact(false);
        $res8 = $a->fact('abc');
        $this->assertEquals(1, $res1);
        $this->assertEquals(1, $res2);
        $this->assertEquals(120, $res3);
        $this -> assertEquals ($a -> fact($n-1) * $n, $res4);
        $this -> assertEquals (null,$res5);
        $this -> assertEquals (null,$res6);
        $this -> assertEquals (null,$res7);
        $this -> assertEquals (null,$res8);
        
    }
}
?>