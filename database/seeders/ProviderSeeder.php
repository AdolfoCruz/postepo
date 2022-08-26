<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //BEGIN:: Create first provider
        DB::table('provider')->insert([
            'user_id'   => 6,
            'phone'     => '2361158932',
            'rfc'       => 'RAREOOO618M16',
            'adress'    => 'Calle Antonio Ruanova',
        ]);
        //END:: Create first provider

        //BEGIN:: Create second provider
        DB::table('provider')->insert([
            'user_id'   => 7,
            'phone'     => '2361053696',
            'rfc'       => 'FEFJ00701H12',
            'adress'    => 'Av. Miguel Hidalgo #15',
        ]);
        //END:: Create second provider

        //BEGIN:: Create third provider
        DB::table('provider')->insert([
            'user_id'   => 8,
            'phone'     => '2382052321',
            'rfc'       => 'LOGE990412MV3',
            'adress'    => 'Callejon Guadalupe Voctoria',
        ]);
        //END:: Create third provider

        //BEGIN:: Create fourth provider
        DB::table('provider')->insert([
            'user_id'   => 9,
            'phone'     => '2332005689',
            'rfc'       => 'JUZR980309MC4',
            'adress'    => 'Colonia Bellavista #189',
        ]);
        //END:: Create fourth provider

        //BEGIN:: Create fifth provider
        DB::table('provider')->insert([
            'user_id'   => 10,
            'phone'     => '2361104578',
            'rfc'       => 'ROMIOOO618M11',
            'adress'    => 'Calle Ignacio Zaragoza #314 ',
        ]);
        //END:: Create fifth provider


    }
}
