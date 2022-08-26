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
            'name'      => 'Elizabeth',
            'last_name' => 'Rayon',
            'email'     => 'elizabethrayon@nixdit.com',
            'phone'     => '2361158932',
            'rfc'       => 'RAREOOO618M16',
            'adress'    => 'Calle Antonio Ruanova',
            'status'    => 1
        ]);
        //END:: Create first provider

        //BEGIN:: Create second provider
        DB::table('provider')->insert([
            'name'      => 'Juan',
            'last_name' => 'Fernandez',
            'email'     => 'juanfernandez@nixdit.com',
            'phone'     => '2361053696',
            'rfc'       => 'FEFJ00701H12',
            'adress'    => 'Av. Miguel Hidalgo #15',
            'status'    => 1
        ]);
        //END:: Create second provider

        //BEGIN:: Create third provider
        DB::table('provider')->insert([
            'name'      => 'Erika',
            'last_name' => 'Lopez',
            'email'     => 'erikalopez@nixdit.com',
            'phone'     => '2382052321',
            'rfc'       => 'LOGE990412MV3',
            'adress'    => 'Callejon Guadalupe Voctoria',
            'status'    => 1
        ]);
        //END:: Create third provider

        //BEGIN:: Create fourth provider
        DB::table('provider')->insert([
            'name'      => 'Raul',
            'last_name' => 'Juarez',
            'email'     => 'rauljuarez@nixdit.com',
            'phone'     => '2332005689',
            'rfc'       => 'JUZR980309MC4',
            'adress'    => 'Colonia Bellavista #189',
            'status'    => 1
        ]);
        //END:: Create fourth provider

        //BEGIN:: Create fifth provider
        DB::table('provider')->insert([
            'name'      => 'Isabel',
            'last_name' => 'Rodriguez',
            'email'     => 'isabelrodriguez@nixdit.com',
            'phone'     => '2361104578',
            'rfc'       => 'ROMIOOO618M11',
            'adress'    => 'Calle Ignacio Zaragoza #314 ',
            'status'    => 1
        ]);
        //END:: Create fifth provider


    }
}
