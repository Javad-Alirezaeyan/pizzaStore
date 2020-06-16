<?php

namespace Tests\Feature;

use App\Role;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function testReturnLoginAccessNeedLoginPage()
    {
        $this->get('dashboard')->assertRedirect('/login');
        $this->get('orders')->assertRedirect('/login');
        $this->get('itemsList')->assertRedirect('/login');
        $this->get('item')->assertRedirect('/login');
    }


    public function testLogin(){
        $role = Role::where(['r_title'=> AdministratorRole])->first();

        $faker = \Faker\Factory::create();

        //create a user based UserRole to login
        $user =  User::create(['username' => $faker->unique()->word, 'password' => Hash::make('123456'), 'role_id'=>1]);

        Auth::login($user);

        $response = $this->get('/login');
        $response->assertStatus(302)->assertRedirect('/');



        $this->get('dashboard')->assertRedirect('/dashboard');
        $this->get('orders')->assertRedirect('/dashboard');
        $this->get('getItems')->assertRedirect('/dashboard');
        $this->get('item')->assertRedirect('/dashboard');
    }



}
