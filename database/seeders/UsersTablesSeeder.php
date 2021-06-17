<?php


namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'MainAdmin',
            'regNo' => '2017/CSC/021',
            'email' => 'johndoe2@hotmail.com',
            'is_admin'=>'1',
            'password'=> bcrypt('07070707'),
        ]);
        User::create([
            'name' => 'Treasurer',
            'regNo' => '2017/CSC/031',
            'email' => 'johndoe3@hotmail.com',
            'is_admin'=>'2',
            'password'=> bcrypt('07070707'),
        ]);
        User::create([
            'name' => 'Editor',
            'regNo' => '2017/CSC/030',
            'email' => 'johndoe4@hotmail.com',
            'is_admin'=>'3',
            'password'=> bcrypt('07070707'),
        ]);

    }
}
