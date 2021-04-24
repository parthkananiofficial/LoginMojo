<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin user
        DB::table('users')->insert([
            'name' => "SuperAdmin",
            'mobile' => '+917405136746',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'credit' => 10,
            'expired_at' => Carbon::now()->addDays(7),
        ]);
    }
}
