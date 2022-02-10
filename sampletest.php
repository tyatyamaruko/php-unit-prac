<?php

require "./vendor/autoload.php";
require "./index.php";

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    public function testHello() {
        $sample = new Sample();
        $result = $sample->hello();

        $this->assertEquals("hello", $result);
    }
}