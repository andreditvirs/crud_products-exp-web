<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_user = new User;
        $new_user->username = 'admin';
        $new_user->password = bcrypt('admin');
        $new_user->email = null;
        $new_user->name = "Admin";
        $new_user->role = 'ADMIN';
        $new_user->is_approved = true;
        $new_user->save();
    }
}
