
<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
   
    public $isTrue = true;
    /**
     * @test
     */
    public function phpunit_works(): void
    {
        // self::assertTrue($this->isTrue);
        // $a = "la";
        // $b = "le";
        // $c = $a + $b;
        // echo $c;
        // die;
        // $this->assertIsInt($c);
        $this->assertIsArray(5);

    }
}