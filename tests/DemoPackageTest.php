<?php

use PHPUnit\Framework\TestCase;
use thangit97\DemoPackage\DemoPackage;

class DemoPackageTest extends TestCase {
    public function testSayHello() {
        $demo = new DemoPackage();
        $this->assertEquals("Hello from DemoPackage!", $demo->sayHello());
    }
}
