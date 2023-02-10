
<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
   
    /**
     * @test
     */
    public function phpunit_works(): void
    {
        // self::assertTrue(true);
        $this->assertCount(2, [1, 2]);
        // $this->assertIsInt('12');


    }
}