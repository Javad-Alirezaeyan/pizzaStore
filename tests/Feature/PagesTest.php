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
        $this->assertEquals('/', '/');
        $this->assertEquals('/basket', '/basket');
    }

    public function testLoginLogout(){
        $role = Role::where(['r_title'=> AdministratorRole])->first();

        $faker = \Faker\Factory::create();

        //create a user based UserRole to login
        $user =  User::create(['username' => $faker->unique()->word, 'password' => Hash::make('123456'), 'role_id'=>$role->r_id]);

        Auth::login($user);
        $response = $this->assertEquals('/dashboard', '/dashboard');

        //test login
        $this->assertEquals('/dashboard', '/dashboard');
        $this->assertEquals('/orders', '/orders');
        $this->assertEquals('/items', '/items');
        $this->assertEquals('/item', '/item');

        //test logout
        Auth::logout($user);
        $this->get('dashboard')->assertRedirect('/login');
        $this->get('orders')->assertRedirect('/login');
        $this->get('itemsList')->assertRedirect('/login');
        $this->get('item')->assertRedirect('/login');
    }






}
