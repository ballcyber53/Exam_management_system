<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                        DB::table('faculties')->insert([
                            'name' => 'คณะครุศาสตร์อุตสาหกรรมและเทคโนโลยี',
                            ]);

                        DB::table('faculties')->insert([
                            'name' => 'คณะบริหารธุรกิจ',

                            ]);
                        DB::table('faculties')->insert([
                            'name' => 'คณะวิศวกรรมศาสตร์',
                            ]);
                        DB::table('faculties')->insert([
                            'name' => 'คณะศิลปศาสตร์',

                            ]);

                        DB::table('faculties')->insert([
                            'name' => 'คณะสถาปัตยกรรมศาสตร์',

                            ]);
                            DB::table('faculties')->insert([
                            'name' => 'วิทยาลัยรัตภูมิ',

                            ]);
    }
}
