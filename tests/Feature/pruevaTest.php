<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class pruevaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testProducerFirst()
    {
        $this->assertTrue(false);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
     public function testConsumer($a, $b)
     {
         $this->assertSame('first', $a);
         $this->assertSame('second', $b);
     }
}
