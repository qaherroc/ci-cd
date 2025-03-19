<?php

use PHPUnit\Framework\TestCase;

require 'C:\Users\Qaher\Documents\GitHub\ci-cd\index.php'; // Vervang dit met het juiste pad naar je bestand

class AddFunctionTest extends TestCase {
    public function testAddition() {
        $this->assertEquals(5, Add(3, 2));
        $this->assertEquals(0, Add(0, 0));
        $this->assertEquals(-1, Add(-3, 2));
        $this->assertEquals(10, Add(5, 5));
    }
}

?>