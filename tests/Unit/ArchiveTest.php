<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ArchiveTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testArchives()
    {
         //Given that I have two users in the database that are registered.
        factory(User::class)->create();
        factory(User::class)->create();
        $users=User::archives();
        $this->assertCount(10,$users);
    }
}
