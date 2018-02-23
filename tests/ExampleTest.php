<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(User::class)->create([
            'name'=>'Cristian Avila',
            'email'=>'cristian@develhouse.com',
        ]);
        $this->actingAs($user, 'api');
        $this->visit('api/user')
             ->see('Cristian Avila')
             ->see('cristian@develhouse.com');
    }
}
