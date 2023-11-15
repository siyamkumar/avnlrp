<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RegionStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('region_states')->insert([
            'id' => 1,
            'state_name' => 'Andhra Pradesh',
            'state_code' =>  'AP',
            'created_at' => Carbon::now()
        ]);

        DB::table('region_states')->insert([
            'id' => 2,
            'state_name' => 'Arunachal Pradesh',
            'state_code' =>  'AR',
            'created_at' => Carbon::now()
        ]);

        DB::table('region_states')->insert([
            'id' => 3,
            'state_name' => 'Assam',
            'state_code' =>  'AS',
            'created_at' => Carbon::now()
        ]);

        DB::table('region_states')->insert([
            'id' => 4,
            'state_name' => 'Bihar',
            'state_code' => 'BR',
            'created_at' => Carbon::now()
        ]);

        DB::table('region_states')->insert([
            'id' => 5,
            'state_name' => 'Chhattisgarh',
            'state_code' => 'CG',
            'created_at' => Carbon::now()
        ]);

        DB::table('region_states')->insert([
            'id' => 6,
            'state_name' => 'Goa',
            'state_code' =>  'GA',
            'created_at' => Carbon::now()
        ]);

        DB::table('region_states')->insert([
            'id' => 7,
            'state_name' => 'Gujarat',
            'state_code' =>  'GJ',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 8,
            'state_name' => 'Haryana',
            'state_code' => 'HR',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 9,
            'state_name' => 'Himachal Pradesh',
            'state_code' =>  'HP',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 10,
            'state_name' => 'Jammu and Kashmir',
            'state_code' => 'JK',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 11,
            'state_name' => 'Jharkhand',
            'state_code' =>  'JH',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 12,
            'state_name' => 'Karnataka',
            'state_code' => 'KA',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 13,
            'state_name' => 'Kerala',
            'state_code' => 'KL',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 14,
            'state_name' => 'Madhya Pradesh',
            'state_code' =>  'MP',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 15,
            'state_name' => 'Maharashtra',
            'state_code' => 'MH',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 16,
            'state_name' => 'Manipur',
            'state_code' =>  'MN',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 17,
            'state_name' => 'Meghalaya',
            'state_code' => 'ML',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 18,
            'state_name' => 'Mizoram',
            'state_code' => 'MZ',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 19,
            'state_name' => 'Nagaland',
            'state_code' =>  'NL',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 20,
            'state_name' => 'Orissa',
            'state_code' => 'OR',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 21,
            'state_name' => 'Punjab',
            'state_code' => 'PB',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 22,
            'state_name' => 'Rajasthan',
            'state_code' =>  'RJ',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 23,
            'state_name' => 'Sikkim',
            'state_code' => 'SK',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 24,
            'state_name' => 'Tamil Nadu',
            'state_code' => 'TN',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 25,
            'state_name' => 'Tripura',
            'state_code' =>  'TR',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 26,
            'state_name' => 'Uttarakhand',
            'state_code' =>  'UK',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 27,
            'state_name' => 'Uttar Pradesh',
            'state_code' =>  'UP',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 28,
            'state_name' => 'West Bengal',
            'state_code' => 'WB',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 29,
            'state_name' => 'Andaman and Nicobar Islands',
            'state_code' =>  'AN',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 30,
            'state_name' => 'Chandigarh',
            'state_code' => 'CH',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 31,
            'state_name' => 'Dadra and Nagar Haveli',
            'state_code' => 'DH',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 32,
            'state_name' => 'Daman and Diu',
            'state_code' =>  'DD',
            'created_at' => Carbon::now()
        ]);
        DB::table('region_states')->insert([
            'id' => 33,
            'state_name' => 'Delhi',
            'state_code' => 'DL',
            'created_at' => Carbon::now()
        ]);

        DB::table('region_states')->insert([
            'id' => 34,
            'state_name' => 'Lakshadweep',
            'state_code' => 'LD',
            'created_at' => Carbon::now()
        ]);

        DB::table('region_states')->insert([
            'id' => 35,
            'state_name' => 'Pondicherry',
            'state_code' => 'PY',
            'created_at' => Carbon::now()
        ]);
    }
}
