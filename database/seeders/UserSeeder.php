<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //BEGIN:: Create a superadmin
        $superadmin = User::create([
            'name'      => 'Nixdit',
            'last_name' => 'Innovación y Tecnología',
            'email'     => 'superadmin@nixdit.com',
            'password'  => Hash::make('Superadmin2022'),
            'status'=>1
        ]);
        //END:: Create an superadmin

        $superadmin->assignRole('superadmin');

         //BEGIN:: Create a superadmin
         $second_superadmin = User::create([
            'name'      => 'Adolfo',
            'last_name' => 'Cruz',
            'email'     => 'adolfo@nixdit.com',
            'password'  => Hash::make('Superadmin2022'),
            'status'=>1
        ]);
        //END:: Create an superadmin

        $superadmin->assignRole('superadmin');


        //BEGIN:: Create an employee
        $employee = User::create([
            'name'      => 'Luis',
            'last_name' => 'Hernandez',
            'email'     => 'empleado@mail.com',
            'password'  => Hash::make('Empleado2022'),
            'status'=>1
        ]);

        $employee->assignRole('employee');
        //END:: Create an employee

        //BEGIN:: Create an employee
        $second_employee = User::create([
            'name'      => 'Clara',
            'last_name' => 'Luz',
            'email'     => 'empleado2@mail.com',
            'password'  => Hash::make('Empleado2022'),
        ]);

        $second_employee->assignRole('employee');
        //END:: Create an employee

        //BEGIN:: Create a client
        $client = User::create([
            'name'      => 'Oscar',
            'last_name' => 'Gomez',
            'email'     => 'oscar@mail.com',
            'password'  => Hash::make('Cliente2022'),
            'status'=>1
        ]);

        $client->assignRole('client');
        //END:: Create a client


    }
}
