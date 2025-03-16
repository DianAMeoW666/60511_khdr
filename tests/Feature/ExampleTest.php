<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Seance;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */

    public function test_that_true_is_true()
    {
        $date = Seance::find(1);
        print_r($date-> toArray());
$this -> assertNotNull($date);
    }
}
