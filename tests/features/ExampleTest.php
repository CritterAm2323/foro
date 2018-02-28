<?php

use App\User;
class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_basic_example()
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
