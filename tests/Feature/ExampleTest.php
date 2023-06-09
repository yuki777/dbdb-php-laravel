<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Support\Facades\Redis;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_mysql(): void
    {
        $users = DB::select('select * from users');
        $this->assertSame(0, count($users));

        DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['Marc', 'marc@example.com', 'password']);

        $users = DB::select('select * from users');
        $this->assertSame(1, count($users));
    }

    public function test_redis(): void
    {
        $testData = 'FOOBAR';
        $this->assertTrue(Redis::set('foo', $testData));
        $this->assertEquals($testData, Redis::get('foo'));
    }
}
