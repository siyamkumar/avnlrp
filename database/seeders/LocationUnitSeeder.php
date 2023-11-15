<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {






        DB::table('location_units')->insert(
            [
                'id' => 1,
                'unit_code' => 'AVNLCO',
                'unit_name' => 'AVNLCO',
                'address' => 'Chennai',
                'about' => 'Armoured Vehicles Nigam Limited (AVANI) (AVNL) is a new Defence PSU with its headquarters at Avadi (Chennai). It has five (05) constituent production units and has around 12,000 employees. AVNL produces battle tanks i.e. T-72, T90, MBT Arjun and Infantry Combat Vehicles, support vehicles (MPV, AERV etc.) and Defence mobility solutions (Stallion, LPTA etc.) for the armed forces and homeland security agencies. It is the current market leader in this segment. It is a new Government Company with Great Future. It offers great work environment and challenging opportunities for the professionals to prove their mettle.',
                'created_at' => Carbon::now(),

            ],);

        DB::table('location_units')->insert(
            [
                'id' => 2,
                'unit_code' => 'HVF',
                'unit_name' => 'HVF',
                'address' => 'Chennai',
                'about' => '',
                'created_at' => Carbon::now(),
            ],
        );
        DB::table('location_units')->insert([
            'id' => 3,
            'unit_code' => 'EFA',
            'unit_name' => 'EFA',
            'address' => 'Chennai',
            'about' => '',
            'created_at' => Carbon::now(),
        ],);
        DB::table('location_units')->insert(
            [
                'id' => 4,
                'unit_code' => 'VFJ',
                'unit_name' => 'VFJ',
                'address' => 'Chennai',
                'about' => '',
                'created_at' => Carbon::now(),
            ],
        );
        DB::table('location_units')->insert([
            'id' => 5,
            'unit_code' => 'MTPF',
            'unit_name' => 'MTPF',
            'address' => 'Ambernath',
            'about' => '',
            'created_at' => Carbon::now(),
        ],);
        DB::table('location_units')->insert([
            'id' => 6,
            'unit_code' => 'OFMK',
            'unit_name' => 'OFMK',
            'address' => 'Yeddumailaram',
            'about' => 'Ordnance Factory Medak is one of the 5 Ordnance Factories under Armoured Vehicles Nigam Ltd., On 19th July, 1984 the then Prime Minister Late Smt. Indira Gandhi laid the foundation to establish the factory for indigenous production of Infantry Combat Vehicles(ICVs) at Yeddumailaram in Sangareddy District of Telangana State.',
            'created_at' => Carbon::now(),
        ],);
    }
}
