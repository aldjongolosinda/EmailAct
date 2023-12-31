<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Golosinda',
                'first_name' => 'Aldjohn',
                'middle_name' => '',
                'address' => 'Macaas, Tubigon, Bohol',
                'birth_date' => '09-07-2000',
                'phone_number' => '09568250887',
                'email' => 'aldjohngolosinda@gmail.com',
                'initial_deposit' => '200000',
            ],

        ];

        foreach($cl as $c) {
            Client::create($c);
        }

    }
}
