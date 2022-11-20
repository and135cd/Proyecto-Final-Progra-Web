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
        $useradmin=User::create([
            'name'=>'Gabriela Ovalle',
            'email'=>'gabriela@gmail.com',
            'password'=>Hash::make('admin'),
            'tipo'=>'1',
        ]);
        $gerente=User::create([
            'name'=>'Andrew Castro',
            'email'=>'andrew@gmail.com',
            'password'=>Hash::make('gerente'),
            'tipo'=>'2',
        ]);
        $cliente=User::create([
            'name'=>'Adrian Barragan',
            'email'=>'adrian@gmail.com',
            'password'=>Hash::make('cliente'),
            'tipo'=>'3',
        ]);
    }
}
