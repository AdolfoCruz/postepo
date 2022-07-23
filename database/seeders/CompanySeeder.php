<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('company')->insert([
        // 'id'=>1,
        'store_name'=>'Nix Diseño Innovación y Tecnología',
        'store_owner'=>'Josmar Bonilla Mendez',
        'store_address'=>'Av. Homero No.538, Polanco, Ciudad de México',
        'store_email'=>'contacto@nixdit.com',
        'store_phone'=>'5596325874',
        'store_rfc'=>'RFCX121022NR7'
        ] );

    }
}
