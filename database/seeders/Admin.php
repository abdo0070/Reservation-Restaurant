<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => "Admin".Str::random(3)."@gmail.com",
            'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", // password => password has
            'is_admin' => true,
            'created_at' => date("Y-m-d H:i:s", strtotime('now')) ,
            'updated_at' => date("Y-m-d H:i:s", strtotime('now')) ,
            'remember_token' => Str::random(10),
        ]);  
    }
}