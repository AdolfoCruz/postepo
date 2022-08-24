<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UnitMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unitmeasure')->insert([
        'name'=>'Pieza',
        ] );
        
        DB::table('unitmeasure')->insert([
        'name'=>'Litro',
        ] );

        DB::table('unitmeasure')->insert([
            'name'=>'Caja',
            ] );
            
        DB::table('unitmeasure')->insert([
        'name'=>'Kilogramo',
        ] );

        DB::table('unitmeasure')->insert([
            'name'=>'Cuñete',
            ] );
            
        DB::table('unitmeasure')->insert([
        'name'=>'Metro',
        ] );

        DB::table('unitmeasure')->insert([
            'name'=>'Paquete',
            ] );
            
        DB::table('unitmeasure')->insert([
        'name'=>'Bulto',
        ] );
    }
}