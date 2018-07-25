<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Group extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testDatabase()
     {
       $postit = factory(App\Group::class)->make();
     }
}
