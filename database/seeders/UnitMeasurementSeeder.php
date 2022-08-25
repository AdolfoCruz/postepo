<?php

namespace Database\Seeders;

use App\Models\UnitMeasurement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitMeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table ('unit_measurements')->insert ([
            'name'=>'metal'
        ]);

        DB:: table ('unit_measurements')->insert ([
            'name'=>'plástico'
        ]);

        DB:: table ('unit_measurements')->insert ([
            'name'=>'madera'
        ]);

        UnitMeasurement:: create ([
            'name'=>'unicel'
        ]);

        UnitMeasurement:: create ([
            'name'=>'vidrio'
        ]);

        UnitMeasurement:: create ([
            'name'=>'papel'
        ]);

       


    }
}
