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
            'last_name' => 'Innovación',
            'mothers_last_name' => 'Tecnología',
            'email'     => 'superadmin@nixdit.com',
            'password'  => Hash::make('DevAdmin2022'),
            'status'=>1
        ]);
        $superadmin->assignRole('superadmin');
        //END:: Create an superadmin

         //BEGIN:: Create a superadmin
         $second_superadmin = User::create([
            'name'      => 'Adolfo',
            'last_name' => 'Cruz',
            'mothers_last_name' => 'Sanchez',
            'email'     => 'adolfo@nixdit.com',
            'password'  => Hash::make('Administrador1'),
            'status'=>1
        ]);
        $second_superadmin->assignRole('superadmin');
        //END:: Create an superadmin


        //BEGIN:: Create an employee
        $employee = User::create([
            'name'      => 'Luis',
            'last_name' => 'Hernandez',
            'mothers_last_name' => 'Perez',
            'email'     => 'empleado@mail.com',
            'password'  => Hash::make('Empleado1234'),
            'status'=>1
        ]);
        $employee->assignRole('employee');
        //END:: Create an employee

        //BEGIN:: Create an employee
        $second_employee = User::create([
            'name'      => 'Clara',
            'last_name' => 'Luz',
            'mothers_last_name' => 'Paz',
            'email'     => 'empleado2@mail.com',
            'password'  => Hash::make('Empleado1234'),
        ]);
        $second_employee->assignRole('employee');
        //END:: Create an employee

        //BEGIN:: Create a client
        $client = User::create([
            'name'      => 'Oscar',
            'last_name' => 'Gomez',
            'mothers_last_name' => 'Lopez',
            'email'     => 'oscar@mail.com',
            'password'  => Hash::make('Client1234'),
            'status'=>1
        ]);
        $client->assignRole('client');
        //END:: Create a client

        //BEGIN:: Create a provider
        $provider = User::create([
            'name'      => 'Elizabeth',
            'last_name' => 'Rayon',
            'mothers_last_name' => 'Tec',
            'email'     => 'elizabethrayon@nixdit.com',
            'password'  => Hash::make('Proveedor1234'),
            'status'=>1
        ]);
        $provider->assignRole('provider');
        //END:: Create a provider

        //BEGIN:: Create a provider
        $second_provider = User::create([
            'name'      => 'Juan',
            'last_name' => 'Fernandez',
            'mothers_last_name' => 'Tec',
            'email'     => 'juanfernandez@nixdit.com',
            'password'  => Hash::make('Proveedor1234'),
            'status'=>1
        ]);
        $second_provider->assignRole('provider');
        //END:: Create a provider

        //BEGIN:: Create a provider
        $third_provider = User::create([
            'name'      => 'Erika',
            'last_name' => 'Lopez',
            'mothers_last_name' => 'Tec',
            'email'     => 'erikalopez@nixdit.com',
            'password'  => Hash::make('Proveedor1234'),
            'status'=>1
        ]);
        $third_provider->assignRole('provider');
        //END:: Create a provider

        //BEGIN:: Create a provider
        $fourth_provider = User::create([
            'name'      => 'Raul',
            'last_name' => 'Juarez',
            'mothers_last_name' => 'Tec',
            'email'     => 'rauljuarez@nixdit.com',
            'password'  => Hash::make('Proveedor1234'),
            'status'=>1
        ]);
        $fourth_provider->assignRole('provider');
        //END:: Create a provider

        //BEGIN:: Create a provider
        $fifth_provider = User::create([
            'name'      => 'Isabel',
            'last_name' => 'Rodriguez',
            'mothers_last_name' => 'Tec',
            'email'     => 'isabelrodriguez@nixdit.com',
            'password'  => Hash::make('Proveedor1234'),
            'status'=>1
        ]);
        $fifth_provider->assignRole('provider');
        //END:: Create a provider




    }
}
