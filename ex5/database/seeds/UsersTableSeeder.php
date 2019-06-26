<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) { 
            $user = new User();
            $user->email="mikas".$i."@teste.com";
            $user->name="Mikas".$i." Teste";
            $user->password=Hash::make("123456");
            $user->save();
        }
    }
}
