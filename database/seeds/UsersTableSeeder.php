<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Caleb',
            'email' => 'caleb_18_12@hotmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
