<?php

namespace App\Console\Commands;

use App\Role;
use App\User;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pizza:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if(substr(PHP_VERSION, 0,3) < 7.4){
            $this->warn("php version is less than 7.4");
            if ($this->confirm('Do you want to continue? [y|N]')== false) {
                exit;
            }
        }

        $this->info('migration :');

        try{
            Artisan::call('migrate');
            $this->info('migration was done');
            //Artisan::call('db:seed --class=RolesTableSeeder');

            //check if administrator is exist
            $admin = $this->existAdminUser();
            if($admin){
                $this->warn("the old admin user was founded on db:". $admin->username);
                if ($this->confirm('Do you want create a new admin user? [y|N]')) {
                    $this->getAdminConfiguration();
                }
            }
            else{
                $this->getAdminConfiguration();
            }

            if ($this->confirm('Do you want to insert some fake records in the client table in database automatically? [y|N]')) {

                Artisan::call(' db:seed ');
            }

            // Artisan::call('db:seed --class=UsersTableSeeder');
            $this->info("Laravel development is accessible on port 8080:");
            exec("x-www-browser 127.0.0.1:8080");
            Artisan::call('serve --port=8080');
            $this->line(Artisan::output());
            $this->info("Pizza application installed successfully");

        }
        catch (\Exception $e) {
            die("error:" . $e );
        }


    }



    private function existAdminUser(){
        return User::where('role.r_title', AdministratorRole)->join('role', 'role_id', '=', 'role.r_id')->first();
    }

    private function setAdminuser($username, $pass){
        //find id of admin role
        $role = Role::where('r_title', AdministratorRole)->first();
        if(!$role){
            $role = new Role();
            $role->r_title = AdministratorRole;
            $role->save();
        }
        DB::table('users')->insert([
            'username' => $username ,
            'password' => Hash::make($pass),
            'role_id' => $role->r_id,
        ]);
    }

    private function getAdminConfiguration(){
        $this->line("configuration for Administrator:");
        $username = "";
        $pass = "";
        $usernamebool = false;
        do{
            $username = $this->ask('insert  username');
            $user = User::where('username', $username)->first();
            if($user){
                $this->error('username is exist in database, please enter another username');
            }
            else{
                $usernamebool = true;
                $this->info('Email was set');
            }
        }while(!$usernamebool);

        $passbool = false;
        do{
            $password = $this->secret('insert your password?');
            if (strlen($password) >= 3 ) {
                $passbool = true;
                $this->info('password was set');
            }
            else{
                $this->error('password must be more than 3 characters');
            }
        }while(!$passbool);

        $this->setAdminuser($username, $password);
    }

}
