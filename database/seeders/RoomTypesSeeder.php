<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypesSeeder extends Seeder
{

    public function run(): void
    {
        $types = ['Deluxe', 'Executive', 'Premium'];
        foreach ($types as $type){
            RoomType::create(['name'=> $type]);
        }
    }
}
