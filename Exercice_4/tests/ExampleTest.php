
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
 
        $this->assertIsArray(5);

    }
}
