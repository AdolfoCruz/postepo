<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert([
            // 'id'=>1,
            'name'=>'Bic',
            'description'=>'Marca de lapiceros',
            'status'=>1
        ] );

        DB::table('brands')->insert([
            // 'id'=>1,
            'name'=>'Dixon',
            'description'=>'Marca de Gomas y Borrador',
            'status'=>1
        ] );

        DB::table('brands')->insert([
            // 'id'=>1,
            'name'=>'Shely',
            'description'=>'Marca de Tijeras',
            'status'=>1
        ] );

        DB::table('brands')->insert([
            // 'id'=>1,
            'name'=>'Paper Mate',
            'description'=>'Marca de Boligrafo y lápiz',
            'status'=>1
        ] );

        DB::table('brands')->insert([
            // 'id'=>1,
            'name'=>'Sabonis',
            'description'=>'Marca de Marcador Permanente',
            'status'=>1
        ] );


    }
}
