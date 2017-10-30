<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminitratorTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function it_can_login_into_administration_area()
    {
        //$this->withoutExceptionHandling();

		//Given: we have an user
    	$user = factory(User::class)->create(['admin' => true]);

		//When:
    	$response = $this->post('/login', 
    		[
    			'email' => $user->email,
    			'password' => 'secret'
    		]
    	);

		//Then:        
		$response->assertRedirect('/admin');
    }

    /**
     * @test
     */
    public function an_non_admin_can_not_login_into_administration_area_and_is_redirected_to_home()
    {
        //$this->withoutExceptionHandling();

        //Given: we have an user
        $user = factory(User::class)->create(['admin' => false]);

        //When:
        $response = $this->post('/login',
            [
                'email' => $user->email,
                'password' => 'secret'
            ]
        );

        //Then:
        $response->assertRedirect('/home');
    }
}
