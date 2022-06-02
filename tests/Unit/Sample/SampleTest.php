<?php

namespace Tests\Unit\Sample;

use App\Http\Controllers\Sample\SampleController;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_sample_check()
    {

        $sum= (new SampleController())->add(5,5);

        $this->assertEquals(10,$sum);

    }
}
