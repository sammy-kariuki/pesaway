<?php

namespace SammyKariuki\Pesaway\Tests;

use Orchestra\Testbench\TestCase;
use SammyKariuki\Pesaway\PesawayServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PesawayServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
