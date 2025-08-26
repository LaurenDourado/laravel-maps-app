<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            [
                'name' => 'Parque Ibirapuera',
                'description' => 'Um dos principais parques urbanos de São Paulo',
                'latitude' => -23.5874,
                'longitude' => -46.6576,
                'address' => 'Av. Paulista, 1313 - Bela Vista, São Paulo - SP',
                'category' => 'Parque'
            ],
            [
                'name' => 'Museu de Arte de São Paulo (MASP)',
                'description' => 'Museu de arte mais importante do hemisfério sul',
                'latitude' => -23.5614,
                'longitude' => -46.6564,
                'address' => 'Av. Paulista, 1578 - Bela Vista, São Paulo - SP',
                'category' => 'Museu'
            ],
            [
                'name' => 'Shopping Cidade São Paulo',
                'description' => 'Shopping center localizado na região central',
                'latitude' => -23.5505,
                'longitude' => -46.6333,
                'address' => 'R. Treze de Maio, 1947 - Bela Vista, São Paulo - SP',
                'category' => 'Shopping'
            ]
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
