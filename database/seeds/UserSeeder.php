<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'usertype' => 'admin',
            'address' => '14 ซอยปลํกธง4 หมู่7 ตำบลคอหงส์ อำเภอหาดใหญ่ จังหวัดสงขลา 90110',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'phone' => '0950212223',
            'school' => 'โรงเรียนหาดใหญ่วิทยาลัย 2',
            'education_background' => 'มัธยมตอนปลาย',
            'faculty_id' => '3',
            'major_id' => '11',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);    }
}
