<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\FirmTypes;

class FirmsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('firm_types')->delete();
        DB::statement("ALTER TABLE `firm_types` AUTO_INCREMENT = 1");

        $firma_tipleri = [
            [
                'firm_type' => 'Tüzel Kişilik',
            ],
            [
                'firm_type' => 'Şahıs Şirketi',
            ],

        ];

        foreach ($firma_tipleri as $firma_tip){
            FirmTypes::create($firma_tip);
        }
    }
}
