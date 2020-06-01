<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
            'name' => 'สาขาครุศาสตร์อุตสาหกรรม',
            'faculty_id' => '1',
            'route_map' => 'https://goo.gl/maps/6DNQxaoHjRaseqHz5'
        ]);

        DB::table('majors')->insert([
            'name' =>'สาขาเทคโนโลยีอุตสาหกรรม',
            'faculty_id' => '1',
            'route_map' => 'https://goo.gl/maps/6DNQxaoHjRaseqHz5'

            ]);

        DB::table('majors')->insert([
            'name' =>'สาขาการบัญชี',
            'faculty_id' => '2',
            'route_map' => 'https://goo.gl/maps/VGquqE2gKehho5n89'

            ]);

        DB::table('majors')->insert([
            'name' =>'สาขาการตลาด',
            'faculty_id' => '2',
            'route_map' => 'https://goo.gl/maps/fiEKaZ1zVUZE1uoZA'


            ]);

        DB::table('majors')->insert([
            'name' =>'สาขาการจัดการ',
            'faculty_id' => '2',
            'route_map' => 'https://goo.gl/maps/nCjrXM3a81CDQ7Jn7'
            ]);

        DB::table('majors')->insert([
            'name' =>'สาขาระบบสารสนเทศ',
            'faculty_id' => '2',
            'route_map' => 'https://goo.gl/maps/nCjrXM3a81CDQ7Jn7'
            ]);

        DB::table('majors')->insert([
            'name' =>'สาขาวิศวกรรมโยธา',
            'faculty_id' => '3',
            'route_map' => 'https://goo.gl/maps/Rb1UVNFVkLDHBQ557',
            ]);

        DB::table('majors')->insert([
            'name' =>'สาขาวิศวกรรมไฟฟ้า',
            'faculty_id' => '3',
            'route_map' => 'https://goo.gl/maps/qE9ZBU493CRRmSaV8',
            ]);

       DB::table('majors')->insert([
            'name' =>'สาขาวิศวกรรมเครื่องกล',
            'faculty_id' => '3',
            'route_map' => 'https://goo.gl/maps/NerVHkrP6Yi68DQL9',
            ]);

            DB::table('majors')->insert([
                'name' =>'สาขาวิศวกรรมเครื่องกลเรือ',
                'faculty_id' => '3',
                'route_map' => 'https://goo.gl/maps/7ZarHfzG81Z5kvVf6',
                ]);
            DB::table('majors')->insert([
                'name' =>'สาขาวิศวกรรมอุตสาหการ',
                'faculty_id' => '3',
                'route_map' => 'https://goo.gl/maps/EfvYZPPmPwnpMrh96',
                ]);

            DB::table('majors')->insert([
                'name' =>'สาขาวิศวกรรมคอมพิวเตอร์',
                'faculty_id' => '3',
                'route_map' => 'https://goo.gl/maps/jcancgqAXC2ARVt19',
                ]);

            DB::table('majors')->insert([
                'name' =>'สาขาภาษาต่างประเทศ',
                'faculty_id' => '4',
                'route_map' => 'https://goo.gl/maps/uTARiHhPmwMK9Wbq7',
                ]);
            DB::table('majors')->insert([
                'name' =>'สาขาการโรงแรมและการท่องเที่ยว',
                'faculty_id' => '4',
                'route_map' => 'https://goo.gl/maps/uTARiHhPmwMK9Wbq7',
                ]);

            DB::table('majors')->insert([
                'name' =>'สาขาคหกรรมศาสตร์',
                'faculty_id' => '4',
                'route_map' => 'https://goo.gl/maps/uTARiHhPmwMK9Wbq7',
                ]);

             DB::table('majors')->insert([
                'name' =>'สาขาสถาปัตยกรรมและผังเมือง',
                'faculty_id' => '5',
                'route_map' => 'https://goo.gl/maps/STHUHUL4dtu4JEKr8',
                ]);
            DB::table('majors')->insert([
                'name' =>'สาขาศิลปกรรมและออกแบบ',
                'faculty_id' => '5',
                'route_map' => 'https://goo.gl/maps/STHUHUL4dtu4JEKr8',

                ]);
            DB::table('majors')->insert([
                'name' =>'สาขาอุตสาหกรรม',
                'faculty_id' => '6',
                'route_map' => 'https://goo.gl/maps/GYgpvWgudD7iDgYL6',

                ]);
            DB::table('majors')->insert([
                'name' =>'สาขาบริหารธุรกิจ',
                'faculty_id' => '6',
                'route_map' => 'https://goo.gl/maps/GYgpvWgudD7iDgYL6',

                ]);
    }
}
