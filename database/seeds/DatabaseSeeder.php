<?php

use App\sysuser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        sysuser::insert([
            'uname' => 'admin',
            'namalengkap' => 'Administrator',
            'email' => 'admin@uaspbo.com',
            'upass' => sha1('admin')
        ]);
    }
}
