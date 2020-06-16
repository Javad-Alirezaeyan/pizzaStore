<?php

namespace Tests\Feature;


use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ItemTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testCreateNewItem()
    {

        $faker = \Faker\Factory::create();

        $original_name  = 'test.jpg';
        $mime_type  = 'image/jpg';
        $size  = 600;
        $error   = false;
        $test   = true;
        $file = new UploadedFile(storage_path("app/phpunit/test.jpg"), $original_name, $mime_type, $size, $error, $test);

        $values = [
            "i_title"=>"title1",
            "i_price"=>"12",
            "i_description"=> $faker->text(200),
        ];

        $user = User::where(['username'=> "admin"])->first();

        Auth::login($user);

        $response = $this->call(
            'POST',
            '/saveItem',
            $values,
            [],
            ['file' => $file]
        )->assertRedirect('/itemsList');;

    }
}
