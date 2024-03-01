<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Church;

class ChurchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Church::create([
            'identification' => '123456',
            'name' => 'Hosanna',
            'location' => 'Liberia, Guanacaste, Costa Rica',
            'phone' => '123-456-7890',
            'email' => '@email.com',
            'image' => 'images/IglesiaHosannaCover.jpg',
        ]);

    }
}
