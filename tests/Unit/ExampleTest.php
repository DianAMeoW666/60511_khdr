<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Seance;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true()
    {
        $date = Seance::find(1);
        print_r($date-> toArray());

    }
}
