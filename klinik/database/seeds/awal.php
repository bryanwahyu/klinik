<?php

use Illuminate\Database\Seeder;
use App\User;
class awal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'username'=>'admin',
        'password'=>bcrypt('admin'),
        'role'=>1
        
        ]);
    }
}