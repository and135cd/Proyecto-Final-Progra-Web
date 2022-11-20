<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::create([
            'name'=>'Ana Gabriela Ovalle Motta',
            'email'=>'gabriela@gmail.com',
            'password'=>Hash::make('admin'),
            'tipo'=>'1',

        ]);

        $gerente=User::create([
            'name'=>'Andrew Roan Castro Díaz',
            'email'=>'and@gmail.com',
            'password'=>Hash::make('gerente'),
            'tipo'=>'2',
        ]);

        $user=User::create([
            'name'=>'Adrian Emanuel Barragan Morales',
            'email'=>'adrian@gmail.com',
            'password'=>Hash::make('cliente'),
            'tipo'=>'3',
        ]);
    }
}
