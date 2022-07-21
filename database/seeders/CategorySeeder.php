<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
        // 'id'=>1,
        'name'=>'Skincare',
        'description'=>'Productos Skincare',
        'status'=>1
        ] );

        DB::table('categories')->insert([
            // 'id'=>1,
            'name'=>'Ojos',
            'description'=>'Productos para ojos',
            'status'=>1
        ] );

        DB::table('categories')->insert([
            // 'id'=>1,
            'name'=>'Rostro',
            'description'=>'Productos para rostros',
            'status'=>1
        ] );

        DB::table('categories')->insert([
            // 'id'=>1,
            'name'=>'Labios',
            'description'=>'Productos para labios',
            'status'=>1
        ] );

        DB::table('categories')->insert([
            // 'id'=>1,
            'name'=>'Cabello',
            'description'=>'Productos para cabello',
            'status'=>1
        ] );

        DB::table('categories')->insert([
            // 'id'=>1,
            'name'=>'Herramientas y Accesorios',
            'description'=>'Productos para herramientas y accesorios',
            'status'=>1
        ] );

        DB::table('categories')->insert([
            // 'id'=>1,
            'name'=>'Linea FX',
            'description'=>'Productos linea FX',
            'status'=>1
        ] );

        DB::table('categories')->insert([
            // 'id'=>1,
            'name'=>'Palettes',
            'description'=>'Gama Paletas',
            'status'=>1
        ] );

        DB::table('categories')->insert([
            // 'id'=>1,
            'name'=>'Kit',
            'description'=>'Kits de productos',
            'status'=>1
        ] );
    }
}
