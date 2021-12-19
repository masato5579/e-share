<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $responseLogin     = $this->get('/login');
        $responseDashboard = $this->get('/dashboard');

        $responseLogin->assertStatus(200);
        $responseDashboard->assertStatus(302);
    }
}
